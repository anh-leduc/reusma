<?php

namespace App\Http\Controllers;

use App\Http\Services\ProjDetailService;
use App\Models\Project;
use App\Models\Client;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\QueryException;
use Exception;
use JavaScript;
use Illuminate\Support\Facades\Auth;

class ProjDetailController extends Controller
{
    protected $projDetailService;

    public function __construct(ProjDetailService $projDetailService)
    {
        parent::__construct();

        $this->projDetailService = $projDetailService;    
    }

    public function index($id_project, Request $request, Project $project)
    {
        $user = Auth::user();
        $this->authorize('view',$project);

        try {
            $project = Project::find($id_project);
            $listMonday = $this->projDetailService->getAllDay(
                'monday',
                $project->start_date,
                $project->end_date
            );
            $effortProjectData = $this->projDetailService->getEffortProjectData($id_project, $listMonday);
            $dataView = $this->projDetailService->getDataview($id_project, $effortProjectData, $listMonday);

            $currentProjMemberTypeB = $this->projDetailService->getProjectMemberByType($dataView['proj_member'], "B");
            $currentProjMemberTypeS = $this->projDetailService->getProjectMemberByType($dataView['proj_member'], "S");
            $currentProjMemberTypeN = $this->projDetailService->getProjectMemberByType($dataView['proj_member'], "N");
            
            JavaScript::put([
                'listMonday' => array_map(function ($e) {
                    return Carbon::parse($e)->format('d/m');
                }, $listMonday),
                'project' => $project,
                'projMember' => array_map(function ($e) {
                    return $e->id;
                }, $dataView['proj_member']),
                'effortProject' => $effortProjectData,
                'proj_member_type_b' => $currentProjMemberTypeB,
                'proj_member_type_s' => $currentProjMemberTypeS,
                'proj_member_type_n' => $currentProjMemberTypeN,
            ]);

            //if user click submit -> retrive data from form with post method
            // and save data into database
            if ($request->isMethod('post')) {
                //retrive data from form submit
                $project_name = $request->input('project-name');
                $start_date = $request->input('start-date');
                $end_date = $request->input('end-date');
                $total_effort = $request->input('total-effort');
                $client = $request->input('client');
                $id_client = Client::where('name', $client)->first();
                $proj_manage = $request->input('proj-manage');
                $id_pm = User::where('name', $proj_manage)->first();
                $status = $request->input('status');
                $newProjMemberTypeB = $request->input('proj_member_type_b') ? $request->input('proj_member_type_b') : [];
                $newProjMemberTypeS = $request->input('proj_member_type_s') ? $request->input('proj_member_type_s') : [];
                $newProjMemberTypeN = $request->input('proj_member_type_n') ? $request->input('proj_member_type_n') : [];
                // update new information project
                
                if($user->can('updateMember',$project)){
                    $this->projDetailService->addNewMember($id_project, $newProjMemberTypeB, 'B');
                    $this->projDetailService->addNewMember($id_project, $newProjMemberTypeS, 'S');
                    $this->projDetailService->addNewMember($id_project, $newProjMemberTypeN, 'N');
                    $this->projDetailService->removeMember($id_project, $currentProjMemberTypeB, $newProjMemberTypeB, 'B');
                    $this->projDetailService->removeMember($id_project, $currentProjMemberTypeS, $newProjMemberTypeS, 'S');
                    $this->projDetailService->removeMember($id_project, $currentProjMemberTypeN, $newProjMemberTypeN, 'N');
                }else{
                    return abort(403);
                }
            
                if($user->can('update',$project)){
                    $project->name = $project_name;
                    $project->start_date = $start_date;
                    $project->end_date = $end_date;
                    $project->total_effort = $total_effort*160;
                    $project->id_client = $id_client->id;
                    $project->id_pm = $id_pm->id;
                    $project->status = $status;
                }

                $project->save();
                return Redirect::to("project/" . $id_project);
            }
            return view('proj_detail', $dataView);
        } catch (Exception $ex) {
            return abort(500);
        }
    }

    public function projEffort($id_project, Request $request, Project $project)
    {
        $this->authorize('updateEffort',$project);

        try {
            if ($request->ajax()) {
                parse_str($request->getContent(), $data);
                $this->projDetailService->setEffortProjectData($id_project, $data);
                return Response::json(array(
                )); 
            }
        } catch (Exception $ex) {
            return response($ex->getMessage(), $request->errorCode);
        }
    }

}
