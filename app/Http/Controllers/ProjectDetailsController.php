<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project ;
use App\Project_Details ;
use App\Kelompok;
use App\Project_File ;
use App\Kelompok_Detail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\User;
use App\Komentar;
use App\Nilai_Kelompok ;
use App\Nilai_Individu ;

class ProjectDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        if ( auth()->user()->account_type =="Siswa" ){
            $kelompok = Kelompok::where('project_id',$project->id)
            ->join('kelompok_detail','kelompok.id','=','kelompok_detail.kelompok_id')
            ->where('kelompok_detail.identity_number',auth()->user()->identity_number)->get()->first();
            $user = User::get();
            $nilai_individu = Nilai_Individu::where('identity_number',auth()->user()->identity_number)->where('project_id',$project->id)->get()->first();
            $komentar = Komentar::join('users','komentar.identity_number','=','users.identity_number')->select('users.name','komentar.*')->get();
            return view('project.details.indexsiswa',compact('project','komentar','user','kelompok','nilai_individu'));
        }

        $user = User::get();
        $pd_time = Project_Details::where('project_id',$project->id)->get()->pluck('project_details_end_time')->last();
        $komentar = Komentar::join('users','komentar.identity_number','=','users.identity_number')->select('users.name','komentar.*')->get();
        $nilai_kelompok = Nilai_Kelompok::get();
        // exit();
        return view('project.details.index',compact('project','user','komentar','pd_time','nilai_kelompok'));
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

        $time1 = $request->project_details_start_time ;
        $time2 = $request->project_details_end_time ;
        $pd_time = Project_Details::where('project_id',$project->id)->get()->pluck('project_details_end_time')->last();
        if($pd_time != null ) {
            // echo ($time1 );
            // echo '<br>' ;
            // echo $pd_time ;
            // dd($time1 < $pd_time );
            if ($time1 < $pd_time){
                return back()->withStatus(__("Project Start Time Invalid, There's Another Schedule on that time"));
            }
         }

        if ( $time1 > $time2 ){
            return back()->withStatus(__('Project Start / End Time Invalid'));
        }
        if (count($project->project_details->where('project_details_type' , 'Basic Question')) == 1 && $request->project_details_type == 'Basic Question' )  {
            return back()->withStatus(__('you have basic question already'));
        }
        if (count($project->project_details) > $project->project_phase   ){
            return back()->withStatus(__('Total Phase exceed maximum'));
        }


        $ProjectDetails = $request->all();
        $ProjectDetails['project_id'] = $project->id ;
        $path = Storage::putFile('public/attachments', $request->file('project_details_link'));
        $ProjectDetails['project_details_link'] = Storage::url($path);
        $h = Project_Details::create($ProjectDetails);
        $project->project_phase++;
        $project->save();
        for ($i = 1 ;  $i <= $project->project_group ; $i++) {
            $nilai = new Nilai_Kelompok ;
            $nilai->project__details_id = $h->id ;
            $kel_id = Kelompok::where('kelompok_nomor',$i)->where('project_id',$project->id)->pluck('id')->first();
            $nilai->kelompok_id = $kel_id;
            $nilai->save();
        }
        if( $request->project_details_type == 'Basic Question') {
        Project::where('id' , $project->id)->update(['project_status' => "running"]);
        }
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
    public function update(Request $request, Project $project ,$id)
    {
        $pd = Project_Details::find($id);
        if($request->project_details_link != null ){
            $path = Storage::putFile('public/attachments', $request->file('project_details_link'));
            $pd->project_details_link = Storage::url($path);
        }
        $pd->project_details_description = $request->project_details_description ;
        $pd->project_details_start_time = $request->project_details_start_time ;
        $pd->project_details_end_time = $request->project_details_end_time ;
        $pd->update();
        return back()->withStatus(__('Data has been updated'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project_Details  $project_Details
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project ,  $pd)
    {

    }
}
