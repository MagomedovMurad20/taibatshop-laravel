<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlatyaPageController extends Controller
{
    public function Index()
    {
        return view('mytemp.pages.platya');
    }
}
