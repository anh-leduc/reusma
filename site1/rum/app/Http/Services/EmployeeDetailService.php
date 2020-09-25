<?php 
namespace App\Http\Services;
use Illuminate\Http\Request;

interface EmployeeDetailService
{
    /**
     * get data from database that passing to view
     *
     * @param string $id_project
     * @return [] object
     */


    public function getEffortEmployee($id_employee, $listMonday);
    
    public function getFirstDayOfWeek($day, $numberOfMonth);
}
