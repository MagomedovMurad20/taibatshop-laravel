<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurtkiPageController extends Controller
{
    public function Index()
    {
        return view('pages.kurtki');
    }
}
