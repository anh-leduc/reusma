<?php 
namespace App\Http\Services;

interface EffortUsageService
{
    /**
     * Get every single $day of current month, previous month and next month.
     *
     * @param string $day example: monday, tuesday, wednesday
     * @return [] object
     */

    public function getFirstDayOfWeek($day);

    /**
     * Get datatable effort usage from Database
     *
     * 
     * @return [JSON] object
     */
    public function getData();
}
