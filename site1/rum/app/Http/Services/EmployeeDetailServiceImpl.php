<?php

namespace App\Http\Services;

use App\Exceptions\QueryException;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use App\Models\WorksHour;
use App\Models\WorksOn;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use App\Http\Services\EmployeeDetailService;
use JavaScript;


class EmployeeDetailServiceImpl implements EmployeeDetailService
{
    public function getFirstDayOfWeek($day, $numberOfMonth)
    {
        $x = ($numberOfMonth % 2 == 0) ? (int) floor($numberOfMonth / 2) - 1 : (int) floor($numberOfMonth / 2);
        $y = (int) floor($numberOfMonth / 2);

        $lastMonth = Carbon::now()->sub($x . 'months')->format('Y-m');
        $nextMonth = Carbon::now()->add($y . 'months')->format('Y-m');

        //Get every single $day of current month, previous month and next month.
        $mondays = new \DatePeriod(
            Carbon::parse("first " . $day . " of " . $lastMonth),
            CarbonInterval::week(),
            Carbon::parse("last day of " . $nextMonth)
            //Carbon::parse($nextMonth)
        );

        //format list mondays follow 'Y-m-d'
        $listMonday = array();
        foreach ($mondays as $monday) {
            array_push($listMonday, $monday->format('Y-m-d'));
        }
        //dd(Carbon::parse("last day of ". $nextMonth)->englishDayOfWeek);
        if (Carbon::parse("last day of " . $nextMonth)->englishDayOfWeek == config("web.config.day_week")) {
            array_push($listMonday, Carbon::parse("last day of " . $nextMonth)->format('Y-m-d'));
        }
        return $listMonday;
    }

    public function getEffortEmployee($id_employee, $listMonday)
    {
        try {
            array_push($listMonday, Carbon::parse($listMonday[count($listMonday) - 1])->addDays(7)->format('Y-m-d'));
            $query = "SELECT proj.`id` as 'ProjID', proj.`name` as 'ProjName' , wkson.`type` as Type";
            for ($i = 0; $i < count($listMonday) - 1; $i++) {
                $query .= ", (SELECT  ROUND(SUM(wh.hour)/40*100)
                        FROM `users` subus
                        INNER JOIN `works_on` wo ON wo.`id_dev` = subus.`id`
                        INNER JOIN `works_hour` wh ON wo.`id` = wh.`id_works_on`
                        WHERE subus.id = wkson.id_dev
                        AND wkson.`id_project` = wo.`id_project`
                        AND wh.`week` >= '" . $listMonday[$i] . "' AND wh.`week` < '" . $listMonday[$i + 1] . "'
                        ) AS `" . Carbon::parse($listMonday[$i])->format('Y-m-d') . "`";
            }
            $query .= "
                    FROM `project` proj, `works_on` wkson
                    WHERE wkson.id_project = proj.id AND wkson.id_dev = '" . $id_employee . "'
                    GROUP BY wkson.id_project ORDER BY wkson.id_project ASC";
            $renderQuery = DB::select(DB::raw($query));
            return $renderQuery;
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
