<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project ;
use App\Quiz ;
use App\Answer ;
use App\Question ;
use App\User ;
use App\Nilai_Individu;
use App\Exports\NilaiExport;
use Maatwebsite\Excel\Facades\Excel;


class ProjectQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

        $quiz = new Quiz;
        $quiz->project_id = $project->id ;
        $quiz->start_time = $request->start_time ;
        $quiz->end_time = $request->end_time ;
        $quiz->save();

        $len = count($request->pertanyaan);
        for($i = 0 ; $i < $len ; $i++ ) {
            $question = new Question ;
            $question->quiz_id = $quiz->id ;
            $question->desc = $request->pertanyaan[$i];
            $question->save();
            $answer = new Answer ;
            $answer->question_id = $question->id ;
            $answer->desc = $request->jawaban[$i] ;
            $answer->save();

            $question->answer_id = $answer->id ;
            $question->save();

            $pengecoh1 = new Answer ;
            $pengecoh1->question_id = $question->id ;
            $pengecoh1->desc = $request->pengecoh1[$i] ;
            $pengecoh1->save();
            $pengecoh2 = new Answer ;
            $pengecoh2->question_id = $question->id ;
            $pengecoh2->desc = $request->pengecoh2[$i] ;
            $pengecoh2->save();
            $pengecoh3 = new Answer ;
            $pengecoh3->question_id = $question->id ;
            $pengecoh3->desc = $request->pengecoh3[$i] ;
            $pengecoh3->save();

        }
        $project->hasQuiz = true ;
        $project->save();
        dd($request);

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
        //
    }
    public function insert(Project $project , Request $request) {
        $cnt = 0 ;
        $len = count($request->id) ;
       for ($i = 0 ; $i < $len; $i++) {
          $q = Question::find($request->id[$i]);
          if ($q->answer_id == $request->answer[$i]) $cnt++;
       }
       $val =  $cnt / $len * 100 ;
       Nilai_Individu::where('identity_number',auth()->user()->identity_number)->update(['nilai'=> $val] );



    }
    public function export_excel(Project $project) {
        $data = Nilai_Individu::where('project_id',$project->id)
        ->join('users','users.identity_number','=','nilai_individu.identity_number')
        ->join('project','project.id','=','nilai_individu.project_id')
        ->select('project.project_topic','project.project_subtopic','project.project_kd','project.project_indicator',
        'users.identity_number','users.name','nilai_individu.*')
        ->get();
        return Excel::download(new NilaiExport($data), 'student.xlsx');
    }
}
