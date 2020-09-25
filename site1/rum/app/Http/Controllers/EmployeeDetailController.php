<?php

namespace App\Http\Controllers;

use App\Http\Services\EmployeeDetailService;
use App\Models\Level;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Response;
use Exception;
use JavaScript;

class EmployeeDetailController extends Controller
{
    protected $employeeDetailService;

    public function __construct(EmployeeDetailService $employeeDetailService)
    {
        $this->employeeDetailService = $employeeDetailService;
    }

    public function index($id_employee, Request $request, User $employee)
    {
        $this->authorize('view',$employee);
        $user = Auth::user();

        try {
            $employee = User::find($id_employee);

            //get monday to create header table
            $listMonday = $this->employeeDetailService->getFirstDayOfWeek(
                config("web.config.day_week"), 
                config("web.config.num_month")
            );

            $level = Level::find($employee->id_level);
            $listLevel = Level::all();
 
            $data = $this->employeeDetailService->getEffortEmployee($id_employee, $listMonday);

            JavaScript::put([
                'listMonday' => array_map(function ($e) {
                    return Carbon::parse($e)->format('d/m');
                }, $listMonday),
                'data' => $data,
            ]);

            //if user click submit -> retrive data from form with post method
            // and save data into database
            if ($request->isMethod('post')) {
                if($user->can('update',$employee)){
                    //retrive data from form submit
                    $employee_name = $request->input('employee-name');
                    $gender = $request->input('gender');
                    $join_date = $request->input('join-date');
                    $status = $request->input('status');
                    $id_level = $request->input('level');
                    $privillege = $request->input('privillege');
                    // update new information project

                    $employee->name = $employee_name;
                    $employee->gender = $gender;
                    $employee->join_date = $join_date;
                    $employee->status = $status;
                    $employee->id_level = $id_level;
                    $employee->privillege = $privillege;
                    $employee->save();

                    return Redirect::to("employee/" . $id_employee);
                }else{
                    return abort(403);
                }
                
            }

            return view('employee_detail', [
                'employee' => $employee,
                'level' => $level,
                'listLevel' => $listLevel,
                'listMonday' => array_map(function ($e) {
                    return Carbon::parse($e)->format('d/m');
                }, $listMonday),
                'data' => $data,
            ]);
        } catch (Exception $ex) {
            return abort(500);
        } 
    }

}
