<?php

namespace App\Http\Controllers;

use App\Kelompok;
use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Collection;
use App\Http\Controllers\collect;
use App\Kelompok_Detail ;
use App\Nilai_Individu ;
use App\Nilai_Kelompok;
use App\KelasDetail ;
class KelompokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Project $project)
    {
        $nilai_kelompok = Nilai_Kelompok::WhereIn('project__details_id',$project->project_details->pluck('id'))->get();
        $nilai_individu = Nilai_Individu::get();
        // dd($nilai_kelompok);
        if(auth()->user()->account_type == "Siswa" )
            return back() ;
        $kelompok = Kelompok::where('project_id',$project->id)->orderBy('kelompok_nomor')->get();
        $data = DB::table('kelompok')
        ->join('kelompok_detail','kelompok.id' , '=' , 'kelompok_detail.kelompok_id')
        ->join('project' , 'project.id' , '=' , 'kelompok.project_id')
        ->join('users','kelompok_detail.identity_number' , '=' , 'users.identity_number')
        ->join('nilai_individu','nilai_individu.identity_number','kelompok_detail.identity_number')
        ->select('kelompok_detail.id as kel_id','kelompok.*','users.name','users.identity_number','nilai_individu.nilai as nilai')
        ->orderBy('kelompok.kelompok_nomor')
        ->where('project.id',$project->id)
        ->distinct()
        ->get();





        $members = KelasDetail::where('kelas_id',$project->kelas_id)
            ->whereNotIn('kelas_detail.identity_number',$data->pluck('identity_number'))
            ->join('users','users.identity_number','kelas_detail.identity_number')
            ->select('kelas_detail.*','users.name')->get();

        return view('project.group.index',compact('data','project','kelompok','members','nilai_individu','nilai_kelompok'));
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
    public function store(Request $request, Project $project)
    {

        $count = $project->kelompok->where('identity_number',$request->identity_number);

        if( $count->count() > 0 ) {
            return back()->with('status',"Member already have a group, try to remove first") ;
        }
        else {
            $nilai_individu = Nilai_Individu::where('identity_number',$request->identity_number)->get();
           if($nilai_individu->count() == 0 ){
                $n = new Nilai_Individu;
                $n->project_id = $project->id ;
                $n->identity_number = $request->identity_number ;
                $n->save();
           }
            $kelompok_detail = new Kelompok_Detail ;
            // dd($request);
            $kelompok_detail = $request->all() ;
            Kelompok_Detail::create($kelompok_detail);
            return back()->with('status',"Member has been added");
        }
    }

    public function isiNilai($id_kelompok, $id_project_details , Request $request)
    {

        $Nilai_Kelompok = Nilai_Kelompok::where('project__details_id',$id_project_details)
                            ->where('kelompok_id',$id_kelompok)->update(['nilai' => $request->nilai]);
        // $Nilai_Kelompok['nilai'] = $request->nilai;
        // $Nilai_Kelompok->update();
        return back()->with('status',"Score has been updated");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelompok  $kelompok
     * @return \Illuminate\Http\Response
     */
    public function show(Kelompok $kelompok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kelompok  $kelompok
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelompok $kelompok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kelompok  $kelompok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelompok $kelompok)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kelompok  $kelompok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelompok_detail $kelompok_detail)
    {

        $kelompok_detail->delete();
        return back()->withStatus(__('Data has been deleted'));
    }
}
