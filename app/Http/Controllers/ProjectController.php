<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project ;
use App\Kelompok ;
use App\User ;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::where('identity_number', auth()->user()->identity_number)->orderBy('id', 'desc')->orderBy('project_status', 'desc')->get();
        return view('project.index',compact('project'));
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

    public function store(Request $request)
    {
        $count = User::where('account_type' , 'Siswa')->distinct()->get();
        $count = $count->shuffle();
        $cnt =  $count->count();
        $Project = $request->all();
        if ($Project['project_group'] > $cnt)
         return back()->withStatus(__('Failed ! Groups must be less than total students'));

        $hasil = Project::create($Project);
        if($Project['randomGroup'] == "checkedValue" ){
            $i = 1 ;

            for ($j=0; $j < $cnt ; $j++) {
                if($i > $Project['project_group'] ){
                    $i = $i % $Project['project_group'] ;
                }
               $kelompok = new Kelompok ;
               $kelompok->project_id = $hasil['id'] ;
               $kelompok->kelompok_nomor = $i ;
               $kelompok->identity_number = $count[$j]->identity_number ;
               $i++;
               $kelompok->save();
            }


        }

        return back()->withStatus(__('Data has been added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

        $project->update($request -> all());
        return back()->withStatus(__('Data has been updated'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //dd($project);
        $data = Project::where('id',$project['id']);
        $data->delete();
        return back()->withStatus(__('Data has been deleted'));
    }
}
