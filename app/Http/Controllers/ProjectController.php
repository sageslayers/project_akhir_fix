<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project ;
use App\Project_Details ;
use App\Kelompok ;
use App\User ;
use App\Kelompok_Detail;
use App\Nilai_Individu ;
use App\Quiz ;
use App\Kelas ;
use App\KelasDetail ;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $time  = date('Y-m-d\Th:i');
        $p = Project::where('hasQuiz','1')->get();
        foreach($p as $proj) {

           if($proj->hasTime && (strtotime($proj->quiz->end_time) < strtotime($time)) ) {
               $proj->project_status = 'completed' ;
               $proj->save();
           }
        }
        $user = User::get();
        if (auth()->user()->account_type == "Siswa") {
            $t = Project::join('project_details','project.id' ,'=','project_details.project_id')
            ->whereDate('project_details_start_time','<=' , $time )
            //  ->where('project_details_end_time','>=', $time)
            ->get();
            // dd($t);
        $project_details = Project_Details::get();
        $project = Project::join('kelompok','kelompok.project_id' , '=' ,'project.id')
        ->join('kelompok_detail','kelompok.id','=','kelompok_detail.kelompok_id')
        ->join('users','kelompok_detail.identity_number','=','users.identity_number')
        ->where('kelompok_detail.identity_number',auth()->user()->identity_number)
        ->where('project.project_status' , '!=' ,"pending" )
        ->select('project.*','kelompok.kelompok_nomor','users.name')
        ->orderByDesc('project.created_at')
        ->get();

        return view('project.indexsiswa',compact('project','user','project_details','t'));
        }
        $kelas = Kelas::where('identity_number',auth()->user()->identity_number)->get();
        $project = Project::where('project.identity_number', auth()->user()->identity_number)->orderBy('id', 'desc')->orderBy('project_status', 'desc')
        ->join('kelas','project.kelas_id','kelas.id')
        ->select('project.*','kelas.nama','kelas.key')->get();
        return view('project.index',compact('project','user','kelas'));
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
        $count = KelasDetail::where('kelas_id' , $request->kelas_id)->get();
        $count = $count->shuffle();
        $cnt =  $count->count();
        $Project = $request->all();
        if ($Project['project_group'] > $cnt)
         return back()->withStatus(__('Failed ! Groups must be less than total students'));

        $hasil = Project::create($Project);

        for($i = 1 ; $i <= $Project['project_group'] ; $i++){
            $kelompok = new Kelompok ;
            $kelompok->project_id = $hasil['id'] ;
            $kelompok->kelompok_nomor = $i ;
            $kelompok->save();
        }
        for ($j=0; $j < $cnt ; $j++) {
        $nilai_individu = new Nilai_Individu ;
        $nilai_individu->project_id = $hasil['id'] ;
        $nilai_individu->identity_number = $count[$j]->identity_number;
        $nilai_individu->save();
        }
        if($Project['randomGroup'] == "checkedValue" ){

        $i = 1;

            for ($j=0; $j < $cnt ; $j++) {
                if($i > $Project['project_group'] ){
                    $i = $i % $Project['project_group'] ;
                }
               $kelompok_id = Kelompok::where('kelompok_nomor',$i)->where('project_id',$hasil['id'])->pluck('id')->first();
               $kelompok_detail = new Kelompok_Detail ;
               $kelompok_detail->kelompok_id = $kelompok_id ;
               $kelompok_detail->identity_number = $count[$j]->identity_number ;
               $i++;
               $kelompok_detail->save();

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
    public function finish(Project $project)
    {
       $project->project_status = 'completed' ;
       $project->save();
       return back()->withStatus(__('Data has been Updated'));
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
