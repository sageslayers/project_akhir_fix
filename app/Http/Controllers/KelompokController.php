<?php

namespace App\Http\Controllers;

use App\Kelompok;
use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Collection;
use App\Http\Controllers\collect;

class KelompokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Project $project)
    {
        $kelompok = Kelompok::where('project_id',$project->id)->orderBy('kelompok_nomor')->get();
        $data = DB::table('kelompok')->join('users','kelompok.identity_number' , '=' , 'users.identity_number')
        ->join('project' , 'project.id' , '=' , 'kelompok.project_id')

        ->select('kelompok.*','users.name')->orderBy('kelompok.kelompok_nomor')
        ->where('project.id',$project->id)
        ->get();
        // dd($data);
        $data1 = DB::table('kelompok')->join('users','kelompok.identity_number' , '=' , 'users.identity_number')
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

        foreach ($d2 as $m  ) {
            $x = User::find($m);
            $members->push(['identity_number'=> $x->identity_number , 'name' => $x->name]);
        }
        // dd($members);
        return view('project.group.index',compact('data','project','kelompok','members'));
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
            $kelompok = new Kelompok ;
            // dd($request);
            $kelompok = $request->all() ;
            Kelompok::create($kelompok);
            return back()->with('status',"Member has been added");
        }
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
    public function destroy(Kelompok $kelompok)
    {
        // dd($kelompok);
        $kelompok->delete();
        return back()->withStatus(__('Data has been deleted'));
    }
}
