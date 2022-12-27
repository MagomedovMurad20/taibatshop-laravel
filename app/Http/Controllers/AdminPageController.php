<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AdminPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        //$product->img = $request->img;

        //Если записываешь без енкод64(), то во вьюшке надо енкодить
        // $path = $request->file('img')->getRealPath();
        // $img = file_get_contents($path);
        // $product->img = $img;

        //Это если сразу записываешь енкод, тогда во вьюшке просто выводишь $product->img;
        $path = $request->file('img')->getRealPath();
        $img = file_get_contents($path);
        $base64 = base64_encode($img);
        $product->img = $base64;

        $product->category_id = $request->category_id;
        $product->save();

        return redirect('/admin')->with('info', 'Товар добавлен');
    }
}

//Это если сразу записываешь енкод, тогда во вьюшке просто выводишь $product->img;
// $path = $request->file('img')->getRealPath();
// $img = file_get_contents($path);
// $base64 = base64_encode($img);
// $product->img = $base64;