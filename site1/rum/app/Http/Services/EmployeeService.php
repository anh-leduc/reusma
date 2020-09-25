<?php
namespace App\Http\Services;

interface EmployeeService{
    /**
     * Get all Employee
     * 
     * @return [array]
     */
    public function getEmployee();

    /**
     * Get all level
     * 
     * @return [array]
     */
    public function getLevel();

    /**
     * Add employee
     * @param [array]
     * 
     * @return bool
     */
    public function add($input);

    /**
     * Check Username
     * @param username
     * 
     * @return bool
     */
    public function checkUser($username);
}