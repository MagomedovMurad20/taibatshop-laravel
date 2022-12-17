<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupPageController extends Controller
{
    public function Index()
    {
        return view('pages.signup');
    }
}
