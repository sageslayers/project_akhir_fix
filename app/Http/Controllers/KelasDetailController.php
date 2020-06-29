<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas ;
use App\KelasDetail ;


class KelasDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $kelas = Kelas::find($id) ;
        $kelas_detail = KelasDetail::where('kelas_id',$id)
        ->join('users','kelas_detail.identity_number','users.identity_number')
        ->select('kelas_detail.*','users.name','users.email')
        ->get();

        return view('kelas.detail.index',compact('kelas','kelas_detail'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $tes = KelasDetail::find($id) ;
       $tes->delete();
       return back()->with('status',"Data has been deleted");
    }
    public function destroysiswa($kelas_id,$identity_number)
    {
        // dd($kelas_id);
       $tes = KelasDetail::where('kelas_id',$kelas_id)->where('identity_number',$identity_number)->delete() ;

       return back()->with('status',"Data has been deleted");
    }
}
