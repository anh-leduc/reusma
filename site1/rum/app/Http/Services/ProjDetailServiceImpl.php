<?php

namespace App\Http\Services;

use App\Http\Services\ProjDetailService;
use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use App\Models\WorksHour;
use App\Models\WorksOn;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\DB;

class ProjDetailServiceImpl implements ProjDetailService
{
    //get data from database that passing to view
    public function getDataview($id_project, $effortProjectData, $listMonday)
    {
        try {
            $project = Project::find($id_project);
            $dataview = array();
            $dataview['project'] = $project;
            $dataview['client'] = Client::find($dataview['project']->id_client);
            $dataview['clientlist'] = Client::orderBy('name')->get();
            $dataview['proj_manage'] = User::find($dataview['project']->id_pm);
            $query = "SELECT `users`.`id`,`users`.`name`, `works_on`.`type`
                    FROM `works_on`
                    INNER JOIN `users`
                    ON `users`.`id` = `works_on`.`id_dev`
                    WHERE `id_project`='" . $id_project . "'
                    ORDER BY `users`.`name`;";
            $dataview['proj_member'] = DB::select(DB::raw($query));
            $dataview['users'] = DB::table('users')->orderBy('name')->get();
            $proj_member = $this->getProjectMemberByType($dataview['proj_member'], "");;
            $dataview["proj_member_unique"] = array_unique($proj_member);
            $assigned = $this->calculateEffortByType($effortProjectData, $listMonday, "");
            $billable = $this->calculateEffortByType($effortProjectData, $listMonday, "B");
            $support = $this->calculateEffortByType($effortProjectData, $listMonday, "S");
            $dataview["assigned"] = round($assigned,2);
            $dataview["billable"] = round($billable,2);
            $dataview["support"] = round($support,2);
            return $dataview;
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public function getEffortProjectData($id_project, $listMonday)
    {
        try {
            array_push($listMonday, Carbon::parse($listMonday[count($listMonday) - 1])->addDays(7)->format('Y-m-d'));
            $query = "SELECT us.`id` as 'EmpCode', us.`name` as 'EmpName' , wkson.`type` as Type";
            for ($i = 0; $i < count($listMonday) - 1; $i++) {
                $query .= ", (SELECT  ROUND(SUM(wh.hour)/40*100)
                        FROM `users` subus
                        INNER JOIN `works_on` wo ON wo.`id_dev` = subus.`id`
                        INNER JOIN `works_hour` wh ON wo.`id` = wh.`id_works_on`
                        WHERE subus.id = us.`id` AND us.`username` = subus.`username`
                        AND wkson.`id` = wo.`id`
                        AND wkson.`id_project` = wo.`id_project`
                        AND wh.`week` >= '" . $listMonday[$i] . "' AND wh.`week` < '" . $listMonday[$i + 1] . "'
                        ) AS `" . Carbon::parse($listMonday[$i])->format('Y-m-d') . "` ";
            }
            $query .= ", wkson.`id` as works_on_id
        FROM `project` as proj
        INNER JOIN `works_on` as wkson ON proj.id = wkson.id_project
        INNER JOIN `users` as us ON wkson.id_dev = us.id
        where proj.id = '" . $id_project . "'
        ORDER BY us.`name`,wkson.`type`, wkson.`id`";
            $renderQuery = DB::select(DB::raw($query));
            return $renderQuery;
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public function setEffortProjectData($id_project, $data)
    {
        try {
            $project = Project::find($id_project);
            $listMonday = $this->getAllDay(
                'monday',
                $project->start_date,
                $project->end_date
            );
            for ($i = 0; $i < count($data['old_data']); $i++) {
                foreach ($listMonday as $monday) {
                    if ($data['new_data'][$i][$monday] != null && $data['new_data'][$i][$monday] != "") {
                        $query = "";
                        $hour = ((int) $data['new_data'][$i][$monday]) * 40 / 100;
                        if ($data['old_data'][$i][$monday] == null || $data['old_data'][$i][$monday] == "") {
                            $query = "INSERT INTO `works_hour` (`id_works_on`, `week`, `hour`)
                                VALUES ('" . $data['old_data'][$i]["works_on_id"] . "', '" . $monday . "', '" . $hour . "');";
                            DB::select(DB::raw($query));
                        } elseif ($data['new_data'][$i][$monday] != $data['old_data'][$i][$monday]) {
                            $query = "UPDATE `works_hour`
                                SET `hour` = '" . $hour . "'
                                WHERE `works_hour`.`id_works_on` = " . $data['old_data'][$i]["works_on_id"] . "
                                AND `works_hour`.`week` = '" . $monday . "';";
                            DB::select(DB::raw($query));
                        }
                    }
                }
            }
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public function calculateEffortByType($members, $listMonday, $type)
    {
        $sum = 0;
        //dd($members);
        foreach ($members as $member) {
            foreach ($listMonday as $monday) {
                if ($type == "") {
                    $sum += (($member->$monday) / 100 * 40) / 8;
                } else
                if ($member->Type == $type) {
                    $sum += (($member->$monday) / 100 * 40) / 8;
                }
            }
        }
        return $sum;
    }

    public function getProjectMemberByType($members, $type)
    {
        $proj_member = [];
        foreach ($members as $member) {
            if ($type=="")
            {
                array_push($proj_member, $member->name);
            }
            else
            if ($member->type == $type) {
                array_push($proj_member, $member->id);
            } 
        }
        return $proj_member;
    }
    //add new member to project
    public function addNewMember($id_project, $proj_member, $type)
    {
        try {
            foreach ($proj_member as $member) {
                $dev = WorksOn::where('id_dev', '=', $member)
                    ->where('id_project', '=', $id_project)
                    ->where('type', '=', $type)
                    ->first();
                if ($dev === null) {
                    // dev doesn't works on project -> add dev
                    $worksOn = new WorksOn;
                    $worksOn->id_dev = $member;
                    $worksOn->id_project = $id_project;
                    $worksOn->type = $type;
                    $worksOn->save();
                }
            }
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public function removeMember($id_project, $project_member_current, $proj_member, $type)
    {
        try {
            foreach ($project_member_current as $member) {
                //has $member current exist in project that having in new form submit ????
                if (in_array($member, $proj_member) === false) {
                    //get id works_on that $member doing
                    $query = "SELECT `works_on`.`id`
                          FROM `works_on`
                          WHERE `id_project`='" . $id_project . "' AND `id_dev`= '" . $member . "' AND `type`='" . $type . "';";
                    $list_works_on = DB::select(DB::raw($query));
                    foreach ($list_works_on as $works_on) {
                        //The first, delete record in worksHour table (where have foreign key of works_on)
                        $affectedRows1 = WorksHour::where('id_works_on', '=', $works_on->id)
                            ->delete();
                        //Then, delete record in worksOn table
                        $affectedRows2 = WorksOn::where('id', '=', $works_on->id)
                            ->where('type', '=', $type)
                            ->delete();
                    }
                }
            }
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public function getAllDay($day, $start_date, $end_date)
    {
        //Get every single $day of current month, previous month and next month.
        $mondays = new \DatePeriod(
            Carbon::parse("first " . $day . " of " . $start_date),
            CarbonInterval::week(),
            Carbon::parse("first " . $day . " of " . $end_date . "+ 1 month")
        );

        //format list mondays follow 'Y-m-d'
        $listMonday = array();
        foreach ($mondays as $monday) {
            array_push($listMonday, $monday->format('Y-m-d'));
        }
        return $listMonday;
    }
}
