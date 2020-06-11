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
        // dd($nilai_kelompok);
        if(auth()->user()->account_type == "Siswa" )
            return back() ;
        $kelompok = Kelompok::where('project_id',$project->id)->orderBy('kelompok_nomor')->get();
        $data = DB::table('kelompok')
        ->join('kelompok_detail','kelompok.id' , '=' , 'kelompok_detail.kelompok_id')
        ->join('project' , 'project.id' , '=' , 'kelompok.project_id')
        ->join('users','kelompok_detail.identity_number' , '=' , 'users.identity_number')
        ->select('kelompok.*','users.name','users.identity_number')->orderBy('kelompok.kelompok_nomor')
        ->where('project.id',$project->id)
        ->get();
        // dd($data);
        $data1 = DB::table('kelompok')
        ->join('kelompok_detail','kelompok.id' , '=' , 'kelompok_detail.kelompok_id')
        ->join('users','kelompok_detail.identity_number' , '=' , 'users.identity_number')
        ->join('project' , 'project.id' , '=' , 'kelompok.project_id')
        ->select('users.id')->orderBy('kelompok.kelompok_nomor')
        ->where('project.id',$project->id)
        ->get();

        $d1 = collect();
        $d2 = collect();
        foreach ($data1 as $d ) {
            $d1->push($d->id);
        }
        $data2 = DB::table('users')->select('id')->where('users.account_type','Siswa')->get();
        foreach ($data2 as $d) {
            $d2->push($d->id);
        }
        $d2 = $d2->diff($d1);
        $members = collect();
        // dd($data1);
        $nilai_individu = Nilai_Individu::get();

        foreach ($d2 as $m  ) {
            $x = User::find($m);
            $members->push(['identity_number'=> $x->identity_number , 'name' => $x->name]);
        }
        // dd($members);
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
