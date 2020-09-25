<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProjectRequest;
use App\Http\Services\ProjectService;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\QueryException;
use App\Models\Project;

class ProjectController extends Controller
{
    private $projectService;
    public function __construct(ProjectService $projectService){
        parent::__construct();

        $this->projectService = $projectService;
    }

    public function index(){
        $this->authorize('viewAny', Project::class);

        try{
            //get list project
            $project = $this->projectService->getProject();
            
            //get data for add form
            $client = $this->projectService->getClient();
            $pm = $this->projectService->getPM();
            $dev = $this->projectService->getDev();

            return view('project',[
                "project" => $project,
                "client" => $client,
                "pm" => $pm,
                "dev" => $dev
            ]);
        }catch(Exception $ex){
            return abort(500);
        }
    }

    public function add(AddProjectRequest $request){
        $this->authorize('create',Project::class);

        try{
            //create project
            $defaultValueProject = config('web.config.project');
            $flagAddProject = $this->projectService->addProject([
                "id" => $request->id,
                "name" => $request->name,
                "start_date" => $request->start_date,
                "end_date" => $request->end_date,
                "total_effort" => $request->total_effort * config('web.config.manmonth_to_manhour'),
                "id_pm" => $request->id_pm,
                "id_client" => $request->id_client,
                "real_cost" => $defaultValueProject['default_real_cost'],
                "status" => $request->status
            ]);

            //Create Works_On
            $defaultValueWorksOn = config('web.config.works_on');
            $flagAddDevOnProject = $this->projectService->addDevOnProject([
                "id_project" => $request->id,
                "id_dev" => $request->id_dev,
                "type" => $defaultValueWorksOn["type"]["billable"]
            ]);

            if(!($flagAddProject&&$flagAddDevOnProject))
                // Add failed!
                return response("Can't add this Project",$request->errorCode);

            return "Success";
        }catch(Exception $ex){
            //response error
            return response($ex->getMessage(),$request->errorCode);
        }
        catch(QueryException $ex){
            return response($ex->getMessage(),$request->errorCode);
        }
        
    }

    public function checkId($id){
        $this->authorize('create',Project::class);
        try{
            $ret = $this->projectService->checkId($id);
            if(!$ret){
                return true;
            }else{
                return response("ID Project was existed",500);
            }
        }catch(Exception $ex){
            
            //response error
            return response($ex->getMessage(),500);
        }
        catch(QueryException $ex){
            
            //response error
            return response($ex->getMessage(),500);
        }
    }

    public function delete($id, Project $project){
        $this->authorize('delete', $project);

        try{
            $bool = $this->projectService->delete($id);

            if($bool){
                return true;
            }else{
                return response("Delete failure",500);
            }
        }catch(Exception $ex){
            return response($ex->getMessage(),500);
        }
    }
}
