<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{

    public function Index()
    {
        return view('mytemp.pages.home', ['data' => Product::all()]);
    }
    public function Platya()
    {
        return view('mytemp.pages.home', ['data' => Product::all()->where('category_id', '=', '1')]);
    }
    public function Kurtki()
    {
        return view('mytemp.pages.home', ['data' => Product::all()->where('category_id', '=', '2')]);
    }
    public function Jempers()
    {
        return view('mytemp.pages.home', ['data' => Product::all()->where('category_id', '=', '3')]);
    }
    public function Costums()
    {
        return view('mytemp.pages.home', ['data' => Product::all()->where('category_id', '=', '4')]);
    }
    public function Kardigans()
    {
        return view('mytemp.pages.home', ['data' => Product::all()->where('category_id', '=', '5')]);
    }
}
