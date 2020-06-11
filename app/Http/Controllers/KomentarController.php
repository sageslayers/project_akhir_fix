<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use Illuminate\Support\Facades\Storage;
use App\Project ;
use App\User;

class KomentarController extends Controller
{
    public function index(Project $project){
        return route('project.details.index') ;
    }
    public function store(Request $request)
    {
        $komentar = new Komentar;
        $komentar = $request->all();
        if ($request->file('attachment') ) {

        $path = Storage::putFile('public/attachments', $request->file('attachment'));
        $komentar['link'] = Storage::url($path);
        }
        Komentar::create($komentar);
        return back()->withStatus(__('Comment has been added'));
    }
}
