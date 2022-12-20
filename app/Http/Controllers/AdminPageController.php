<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function Index()
    {
        return view('mytemp.pages.admin');
    }
}
