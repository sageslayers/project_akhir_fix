<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Users_Details ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\User ;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {

        // $UsersDetails = Users_Details::where('identity_number',} {user->identity_number)
        //        ->get();
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {


        auth()->user()->update($request->all());
        auth()->user()->users_details->update($request->all());
        return back()->withStatus(__('Profile successfully updated.'));
    }

    public function updateDetails(Request $request)
    {


        auth()->user()->users_details->update($request->all());

        return back()->with('Success','Profile successfully updated.');
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {


        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}
