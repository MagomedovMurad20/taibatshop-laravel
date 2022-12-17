<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumsPageController extends Controller
{
    public function Index()
    {
        return view('pages.costums');
    }
}
