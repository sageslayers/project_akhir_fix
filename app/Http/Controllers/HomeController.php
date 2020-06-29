<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User;

use Notification;
use App\Nilai_Kelompok ;
use App\Project ;
use App\Notifications\MyFirstNotification;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $project_cnt = Project::get()->where('identity_number',auth()->user()->identity_number);
        $project_cnt2 = Project::get()->where('project_status','!=','completed')->count();
        $teacher_cnt = User::get()->where('account_type','Guru')->count();
        $student_cnt = User::get()->where('account_type','Siswa')->count();

        return view('dashboard',compact('project_cnt','project_cnt2','teacher_cnt','student_cnt'));
    }
    public function sendNotification()

    {

        $user = User::first();



        $details = [

            'greeting' => 'Hi '.$user->name,

            'body' => 'This is my first notification from ItSolutionStuff.com',

            'thanks' => 'Thank you for using ItSolutionStuff.com tuto!',

            'actionText' => 'View My Site',

            'actionURL' => url('/'),

            'order_id' => 101

        ];



        Notification::send($user, new MyFirstNotification($details));



        dd('done');

    }



}
