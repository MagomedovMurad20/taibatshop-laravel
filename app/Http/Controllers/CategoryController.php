<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function Index()
    {
        return view('mytemp.pages.products', ['data' => Category::all()]);
    }
}
