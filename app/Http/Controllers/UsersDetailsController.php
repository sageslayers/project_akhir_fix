<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Users_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\User;


class UsersDetailsController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
        $path = Storage::putFile('public/avatars', $request->file('avatar'));
        $user = User::find(auth()->user()->id);
        $user->avatar = Storage::url($path);
        $user->save();

        return back()
        ->with('tmp_img' , $user->avatar);




    }
}
