<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninPageController extends Controller
{
    public function Index()
    {
        return view('pages.signin');
    }
}
