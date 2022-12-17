<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JempersPageController extends Controller
{
    public function Index()
    {
        return view('pages.jempers');
    }
}
