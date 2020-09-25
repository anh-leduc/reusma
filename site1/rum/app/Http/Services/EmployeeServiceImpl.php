<?php

namespace App\Http\Services;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeServiceImpl implements EmployeeService{
    /**
     * Get All Employee
     * 
     * @return [array]
     */
    public function getEmployee()
    {
        try{
            // DB::enableQueryLog();

            // $data = DB::table('users')
            //     ->join('level','level.id','=','users.id_level')
            //     ->orderBy('name')
            //     ->select(
            //         'users.id as id_user',
            //         'level.level as level',
            //         'users.name as name',
            //         'users.privillege',
            //         'users.status'
            //     )
            //     ->get();

            $data = DB::select(
                "SELECT
                u.id AS id_user,
                l.level AS level,
                u.name AS name,
                (
                SELECT
                    SUM(HOUR)
                FROM
                    works_on AS wo
                INNER JOIN works_hour AS wh
                ON
                    wo.id = wh.id_works_on
                WHERE
                    MONTH(CURRENT_DATE) = MONTH(wh.week) AND YEAR(CURRENT_DATE) = YEAR(wh.week) AND wo.id_dev = u.id 
                ) AS resource, u.status
                FROM
                    users AS u
                INNER JOIN level AS l
                ON
                    l.id = u.id_level
                WHERE u.privillege <> 1"
            );
            // dd(DB::getQueryLog());

            return $data;
        }catch(Exception $ex)
        {
            throw $ex;
        }
    }


    /**
     * Get all level
     * 
     * @return [array]
     */
    public function getLevel(){
        try{
            //query db
            $data = DB::table('level')->get();

            return $data;
        }catch(Exception $ex)
        {
            throw $ex;
        }
    }

    /**
     * Add employee
     * @param [array]
     * 
     * @return bool
     */
    public function add($input){
        try{
            $input["password"]=Hash::make($input["password"]);
            $bool = DB::table('users')->insert($input);
            return $bool;
        }catch(Exception $ex){
            throw $ex;
        }
    }

    /**
     * Check Username
     * @param username
     * 
     * @return bool
     */
    public function checkUser($username){
        try{
            $count = DB::table('users')->where("username",$username)->count();
            if($count == 0)
                return true;
            else 
                return false;
        }catch(Exception $ex){
            throw $ex;
        }
    }
}