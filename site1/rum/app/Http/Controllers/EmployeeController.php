<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddEmployeeRequest;
use App\Http\Services\EmployeeService;
use Exception;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\QueryException;
use App\Models\User;

class EmployeeController extends Controller
{
    private $employeeService;
    public function __construct(EmployeeService $employeeService){
        parent::__construct();

        $this->employeeService = $employeeService;
    }

    public function index()
    {
        $this->authorize('viewAny',User::class);

        try{
            //get list employee
            $employee = $this->employeeService->getEmployee();
            
            //get level
            $level = $this->employeeService->getLevel();

            return view('employee',[
                "employee" => $employee,
                "level" => $level
            ]);
        }
        catch(Exception $ex){
            return abort(500);
        }
    }

    public function add(AddEmployeeRequest $request){
        $this->authorize('create',User::class);

        try{
            $input = array_diff_key($request->all(),["_token"=>0]);
            $bool = $this->employeeService->add($input);

            //return json
            if($bool)
                return response("Success");
            else
                return response("Faild",500);
        }catch(Exception $ex){
            return response($ex->getMessage(),500);
        }catch(QueryException $ex){
            return response($ex->getMessage(),500);
        }
    }

    public function checkUser($username){
        $this->authorize('create',User::class);

        try{
            $check = $this->employeeService->checkUSer($username);
            if($check){
                return response("Valid");
            }
            else{
                return response("Invalid",400);
            }
        }
        catch(Exception $ex){
            return response($ex->getMessage(),500);
        }catch(QueryException $ex){
            return response($ex->getMessage(),500);
        }
    }
}
