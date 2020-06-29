<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas ;
use App\KelasDetail ;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kelas = KelasDetail::
        if(auth()->user()->account_type == 'Guru'){
        $kelas = Kelas::where('identity_number',auth()->user()->identity_number)->get();
        return view('kelas.index',compact('kelas'));
        }
        else{
            $kelas = collect() ;
            $arr_id = KelasDetail::where('identity_number',auth()->user()->identity_number)->pluck('kelas_id');
            foreach($arr_id as $id){
            $data = Kelas::where('kelas.id',$id)->join('users','kelas.identity_number','users.identity_number')
            ->select('kelas.*','users.name')
            ->first();
            $kelas->push($data);
            }

            return view('kelas.indexsiswa',compact('kelas'));
        }

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

        $kelas = $request->all();
        $cnt = Kelas::where('key',$request->key)->count();
       if($cnt == 0 ){
      $t = Kelas::create($kelas);
       return back()->with('status',"Success");
       }
       else{
        return back()->with('status',"Error .. Duplicate Key");
       }
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
        $kelas = Kelas::find($id);

        $kelas->delete();
        return back()->with('status',"Data has been deleted");
    }
    public function join(Request $request)
    {
       $kelas =  Kelas::where('key',$request->key)->get() ;
       if($kelas->count() > 0 ) {
           $id = $kelas->pluck('id')->first();
           $kelas_detail = KelasDetail::where('kelas_id',$id)->where('identity_number',$request->identity_number)

           ->get();
       }

       if($kelas->count() == 0 ) {
        return back()->with('status',"Invalid Key");
       }
       else if($kelas_detail->count() > 0 ) {
        return back()->with('status',"You've joined the class already");
       }
       else {
            $KelasDetail = new KelasDetail ;
            $KelasDetail->identity_number = $request->identity_number ;
            $KelasDetail->kelas_id = $kelas->pluck('id')->first();

            $KelasDetail->save();
            return back()->with('status',"Register to " . $kelas->pluck('nama')->first() . " Success" );
       }
       dd($tes);
    }
}
