<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\StatisticService;
use Illuminate\Support\Facades\Response;
use App\Http\Services\EffortUsageService;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;
use App\Exceptions\QueryException;

class TopController extends Controller
{
    //
    protected $statisticService;
    protected $effortUsageService;

    public function __construct(StatisticService $statisticService,EffortUsageService $effortUsageService)
    {
        parent::__construct();

        $this->effortUsageService = $effortUsageService;

        $this->statisticService = $statisticService;
    }

    public function index(Request $request){
        try{
            //get overview statistic
            $newEmp = $this->statisticService->getNewEmployee();
            $totalEmp = $this->statisticService->getTotalEmployee();
            $client = $this->statisticService->getTotalClient();
            $project = $this->statisticService->getTotalProject();
        
            //get project statistic
            $projStatistic = $this->statisticService->getProjStatistic();

            // effort usage
            //get monday to create header table
            $mondays = $this->effortUsageService->getFirstDayOfWeek("monday");
            //get data to create datatable

            $dataTable = $this->effortUsageService->getData();

            //format monday follow format 'd/m'
            $mondays = array_map(function ($monday) {
                return Carbon::parse($monday)->format('d/m');
            }, $mondays);
            

            // init datatable
            if ($request->ajax()) {
                $table = DataTables::of($dataTable)
                ->setRowAttr([
                    'align' => 'center',
                ])->make(true);
                return $table;
            }
            return view('home',
            array_merge([
                "client"=>$client,
                "project"=>$project,
                "newEmp"=>$newEmp,
                "totalEmp"=>$totalEmp,
                "projStatistic"=>$projStatistic
                
            ],compact("mondays")));
        }
        catch(Exception $ex){
            return abort(500);
        }
        catch (QueryException $exception) {
            return abort(404);
        }
    }

    public function resourceUsage(){
        try{
           $data = $this->statisticService->getResourceUsage();
            
           //response data
           return Response::json($data);
        }catch(Exception $ex)
        {

            //response error
            return response($ex->getMessage(),400);
        }
    }

    public function projectEffort(){
        try{
            $data = $this->statisticService->getProjectEffort();

            //response data
            return Response::json($data);
        }
        catch(Exception $ex)
        {
            //response error
            return response($ex->getMessage(),400);
        }
    }

    public function employeeStructure(){
        try{
            return $this->statisticService->getEmployeeStructure();
        }
        catch(Exception $ex)
        {
            $response = [
                'status_code' => 400,
                'message' => $ex->getMessage()
            ];

            //response error
            return Response::json($response);
        }
    }
}
