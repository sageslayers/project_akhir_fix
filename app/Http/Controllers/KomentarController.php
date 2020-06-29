<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use Illuminate\Support\Facades\Storage;
use App\Project ;
use App\User;
use App\Project_Details ;
use Notification;
use App\Notifications\MyFirstNotification;
use App\Kelompok ;

class KomentarController extends Controller
{
    public function index(Project $project){
        return route('project.details.index') ;
    }
    public function store(Request $request)
    {
        $pd = Project_Details::where('id',$request->project__details_id)->first();

        $project = $pd->project ;
        $kelompok = Kelompok::find($request->kelompok_id);

        $user = User::where('identity_number',$project->identity_number)->first();
        $pengirim = User::where('identity_number',$request->identity_number)->first();




        $komentar = new Komentar;
        $komentar = $request->all();
        if ($request->file('attachment') ) {

        $path = Storage::putFile('public/attachments', $request->file('attachment'));
        $komentar['link'] = Storage::url($path);
        }
        $details = [
            'subject' => "Reply From Group ".$kelompok->kelompok_nomor . ' on ' . $project->project_topic . ' ' . $pd->project_details_type,
            'greeting' => 'Hi, '.$user->name,

            'body' => 'Group ' . $kelompok->kelompok_nomor . ' has sent you a reply on project '.$project->project_topic.' ' . $pd->project_details_type,

            'thanks' => '(' .$pengirim->name . ') '   . $request->komentar_desc,

            'actionText' => 'View Attachment',

            'actionURL' => $request->file('attachment') ?  url($komentar['link']) : null ,



        ];

        Notification::send($user, new MyFirstNotification($details));
        Komentar::create($komentar);
        return back()->withStatus(__('Comment has been added'));
    }
}
