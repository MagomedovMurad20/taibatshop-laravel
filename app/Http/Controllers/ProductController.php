<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{


    public function Index(Request $request)
    {

        $products = Product::all();
        if ($request->has('select')) {
            switch ($request->get('select')) {
                case 'a_z':
                    $products = Product::orderBy('title', 'asc');
                    break;
                case 'priceMax':
                    $products = Product::orderBy('price', 'desc');
                    break;
                case 'priceMin':
                    $products = Product::orderBy('price', 'asc');
                    break;
                default:
                    $products = Product::all();
                    break;
            }
        }
        $products = $products->get();

        return view('mytemp.pages.products', ['data' => $products]);
    }
    public function Platya(Request $request)
    {
        $products = Product::where('category_id', '=', '1');
        if ($request->has('select')) {
            switch ($request->get('select')) {
                case 'a_z':
                    $products = $products->orderBy('title', 'asc');
                    break;
                case 'priceMax':
                    $products = $products->orderBy('price', 'desc');
                    break;
                case 'priceMin':
                    $products = $products->orderBy('price', 'asc');
                    break;
            }
        }
        $products = $products->get();
        return view('mytemp.pages.products', ['data' => $products]);
    }
    public function Kurtki(Request $request)
    {
        $products = Product::all()->where('category_id', '=', '2');
        if ($request->has('select')) {
            switch ($request->get('select')) {
                case 'a_z':
                    $products = Product::orderBy('title', 'asc');
                    break;
                case 'priceMax':
                    $products = Product::orderBy('price', 'desc');
                    break;
                case 'priceMin':
                    $products = Product::orderBy('price', 'asc');
                    break;
            }
            $products = $products->get();
        }
        return view('mytemp.pages.products', ['data' => $products]);
    }
    public function Jempers(Request $request)
    {
        $products = Product::all()->where('category_id', '=', '3');
        if ($request->has('select')) {
            switch ($request->get('select')) {
                case 'a_z':
                    $products = Product::orderBy('title', 'asc');
                    break;
                case 'priceMax':
                    $products = Product::orderBy('price', 'desc');
                    break;
                case 'priceMin':
                    $products = Product::orderBy('price', 'asc');
                    break;
            }
            $products = $products->get();
        }
        return view('mytemp.pages.products', ['data' => $products]);
    }
    public function Costums(Request $request)
    {
        $products = Product::all()->where('category_id', '=', '4');
        if ($request->has('select')) {
            switch ($request->get('select')) {
                case 'a_z':
                    $products = Product::orderBy('title', 'asc');
                    break;
                case 'priceMax':
                    $products = Product::orderBy('price', 'desc');
                    break;
                case 'priceMin':
                    $products = Product::orderBy('price', 'asc');
                    break;
            }
            $products = $products->get();
        }
        return view('mytemp.pages.products', ['data' => $products]);
    }
    public function Kardigans(Request $request)
    {
        $products = Product::all()->where('category_id', '=', '5');
        if ($request->has('select')) {
            switch ($request->get('select')) {
                case 'a_z':
                    $products = Product::orderBy('title', 'asc');
                    break;
                case 'priceMax':
                    $products = Product::orderBy('price', 'desc');
                    break;
                case 'priceMin':
                    $products = Product::orderBy('price', 'asc');
                    break;
            }
            $products = $products->get();
        }
        return view('mytemp.pages.products', ['data' => $products]);
    }
    public function SortByAbc(Request $request)
    {
        if ($request->has('a_z')) {
            return view('mytemp.pages.products', ['data' => Product::orderBy('name', 'Asc')]);;
        }
    }
    public function SortByAbcDesc(Request $request)
    {
        Product::sortBy('name')->desc();
    }
    public function SortByPrice(Request $request)
    {
        Product::sortBy('price');
    }
    public function SortByPriceDesc(Request $request)
    {
        Product::sortBy('price')->desc();
    }
}
