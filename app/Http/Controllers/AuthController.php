<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function GetSignup()
    {
        return view('mytemp.pages.signup');
    }
    public function PostSignup()
    {
        //
    }
}
