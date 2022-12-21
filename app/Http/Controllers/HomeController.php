<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{

    public function Index()
    {
        return view('mytemp.pages.home', ['data' => Product::all()]);
    }
}
