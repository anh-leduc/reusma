<?php

namespace App\Http\Services;

use App\Exceptions\QueryException;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\DB;

class EffortUsageServiceImpl implements EffortUsageService
{
    public function getFirstDayOfWeek($day)
    {
        //Get every single $day of current month, previous month and next month.
        $mondays = new \DatePeriod(
            Carbon::parse("first " . $day . " of previous month"),
            CarbonInterval::week(),
            Carbon::parse("first " . $day . " of next month + 1 month")
        );

        //format list mondays follow 'Y-m-d'
        $listMonday = array();
        foreach ($mondays as $monday) {
            array_push($listMonday, $monday->format('Y-m-d'));
        }
        return $listMonday;
    }

    public function getData()
    {
        //get monday 
        $data = $this->getFirstDayOfWeek("monday");

        // create query statement from every monday.
        $query =   "SELECT us.`id` as 'EmpCode', us.`name` as 'EmpName' ";
        array_push($data, Carbon::parse($data[count($data) - 1])->addDays(7)->format('Y-m-d'));
        for ($i = 0; $i < count($data) - 1; $i++) {
            $query .=  ", (SELECT ROUND(SUM(wh.hour)/40*100) FROM `users` subus 
                    INNER JOIN `works_on` wo ON  wo.`id_dev` = subus.`id`
                    INNER JOIN `works_hour` wh ON wo.`id` = wh.`id_works_on`
                    WHERE subus.id = us.`id` AND us.`username` = subus.`username`
                    AND wh.`week` >= '" . $data[$i] . "' AND wh.`week` < '" . $data[$i + 1] . "'
                    ) AS `" . Carbon::parse($data[$i])->format('d/m') . "` ";
        }
        $query .= "FROM `users` us 
                            GROUP BY us.`id`, us.`username`
                            ORDER BY us.`username` ASC";
        $renderQuery = DB::select(DB::raw($query));

        if (!$renderQuery) {
            throw new QueryException();
        }
        return $renderQuery;
    }
}
