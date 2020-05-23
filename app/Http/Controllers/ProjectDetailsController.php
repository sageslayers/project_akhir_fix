<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project ;
use App\Project_Details ;
use App\Kelompok;

class ProjectDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        return view('project.details.index',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Project $project, Request $request)
    {

        if (count($project->project_details) > $project->project_phase   ){
            return back()->withStatus(__('Total Phase exceed maximum'));
        }
        $ProjectDetails = $request->all();
        // $ProjectDetails->project_id = $project->project_id ;
        // $ProjectDetails->project_details_desc = $request->project_details_desc;
        // $ProjectDetails->project_details_start_time = $request->project_details_start_time ;
        // $ProjectDetails->project_details_end_time = $request->project_details_end_time ;
        $ProjectDetails['project_id'] = $project->id ;

        Project_Details::create($ProjectDetails);
        Project::where('id' , $project->id)->update(['project_has_question' => 1]);
        return back()->withStatus(__('Data has been added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project_Details  $project_Details
     * @return \Illuminate\Http\Response
     */
    public function show(Project_Details $project_Details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project_Details  $project_Details
     * @return \Illuminate\Http\Response
     */
    public function edit(Project_Details $project_Details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project_Details  $project_Details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project_Details $project_Details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project_Details  $project_Details
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project_Details $project_Details)
    {
        //
    }
}
