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
use Notification;
use Illuminate\Support\Collection;
use App\Http\Controllers\collect;
use App\Notifications\MyFirstNotification;
use Illuminate\Support\HtmlString;

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
        return back()->withStatus(__('Quiz has been Assigned'));

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

        $question = collect();
        $answer = collect();
       for ($i = 0 ; $i < $len; $i++) {
          $q = Question::find($request->id[$i]);
          $question->push('Question : ' . $q->desc  );
          $ans = Answer::where('id',$request->answer[$i])->first();
          if ($q->answer_id == $request->answer[$i]) {
              $cnt++;
              $answer->push('Answer : ' . $ans->desc . '(Correct)');
          }
         else{
            $answer->push('Answer : ' . $ans->desc . '(Wrong)');
         }

       }
       $line = '<small>' ;
        for($i = 0 ; $i < $question->count() ; $i++){
        $line = $line . $question[$i] . '<br>' . $answer[$i] . '<br>' ;

       }
       $val =  $cnt / $len * 100 ;
       $line = '<br>' . $line . '<strong>Score : ' . $val .'</strong>' ;
       $line = $line . '</small>' ;


       Nilai_Individu::where('identity_number',auth()->user()->identity_number)->where('project_id',$project->id)->update(['nilai'=> $val] );
       $user = User::where('identity_number',$project->identity_number)->first();
       $pengirim = User::where('identity_number',auth()->user()->identity_number)->first();
       $details = [
        'subject' => "Individual Quiz on " . $project->project_topic . ' Result ' ,
        'greeting' => 'Hi, '.$user->name,

        'body' => $pengirim->name . ' has sent you an individual quiz answer on project '.$project->project_topic ,

        'thanks' => new HtmlString($line)   ,

        'actionText' => 'View Attachment',

        'actionURL' => $request->file('attachment') ?  url($komentar['link']) : null ,
    ];

    Notification::send($user, new MyFirstNotification($details));
       return back()->withStatus(__('Quiz has been Submitted'));


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
