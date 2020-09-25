<?php 
namespace App\Http\Services;
use Illuminate\Http\Request;

interface ProjDetailService
{
    /**
     * get data from database that passing to view
     *
     * @param string $id_project
     * @return [] object
     */

    public function getDataview($id_project, $effortProjectData, $listMonday);

    /**
     *  add new member to project
     *  
     * @param String $id_project, [] $proj_member
     * @return None
     */
     
    public function addNewMember($id_project, $proj_member, $type);

    /**
     *  remove member to project
     *  
     * @param String $id_project, [] $proj_member
     * @return None
     */
    public function removeMember($id_project, $project_member_current, $proj_member, $type);

    /**
     *  get Day from start_date -> end_date
     *  
     * @param String $day, ex Monday, Tuesday, ....
     * @param String $start_date,
     * @param String $end_date
     * 
     * @return [] list Date
     */
    public function getAllDay($day, $start_date, $end_date);

    public function getEffortProjectData($id_project, $listMonday);

    public function setEffortProjectData($id_project, $data);

    public function calculateEffortByType($members, $listMonday, $type);

    public function getProjectMemberByType($members, $type);
}
