<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AdminPageController extends Controller
{
    public function Index()
    {
        return view('mytemp.pages.admin', ['categories' => Category::all()]);
    }
    public function store(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->img = $request->img; //todo сделать кодировку bynari
        $product->category_id = $request->category_id;
        $product->save();
        return redirect('/admin')->with('status', 'Товар добавлен');
    }
}
