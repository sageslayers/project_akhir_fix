<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Users_detail;
use Illuminate\Http\Request;


class UsersDetailsController extends Controller
{
    public function store (Request $request) {
        $UsersDetails = new Users_details ;
        $UsersDetails = $request -> all();
        $UsersDetails->save();
    }
}
