<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupPageController extends Controller
{
    public function GetSignup()
    {
        return view('mytemp.pages.signup');
    }
    public function PostSignup(Request $request)
    {
    }
}
