<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;



class ProductController extends Controller
{
    public function GetAllProducts()
    {
        foreach (Product::all() as $product) {
            $product->title;
            $product->price;
            $product->description;
            $product->img;
        }
    }
}
