<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    //Получаем товары на главной + сортировка
    public function Index(Request $request)
    {
        return view('mytemp.pages.products', ['data' => $this->getAll($request)]);
    }

    //Получаем товары на странице платья + сортировка
    public function Platya(Request $request)
    {
        $categoryId = '1';
        return view('mytemp.pages.products', ['data' => $this->getCategory($request, $categoryId)]);
    }

    //Получаем товары на странице куртки + сортировка
    public function Kurtki(Request $request)
    {
        $categoryId = '2';
        return view('mytemp.pages.products', ['data' => $this->getCategory($request, $categoryId)]);
    }

    //Получаем товары на странице Джемперы + сортировка
    public function Jempers(Request $request)
    {
        $categoryId = '3';
        return view('mytemp.pages.products', ['data' => $this->getCategory($request, $categoryId)]);
    }

    //Получаем товары на странице Костюмы + сортировка
    public function Costums(Request $request)
    {
        $categoryId = '4';
        return view('mytemp.pages.products', ['data' => $this->getCategory($request, $categoryId)]);
    }

    //Получаем товары на странице Кардиганы + сортировка
    public function Kardigans(Request $request)
    {
        $categoryId = '5';
        return view('mytemp.pages.products', ['data' => $this->getCategory($request, $categoryId)]);
    }

    //Сортировка по категориям
    private function getCategory($request, string $categoryId)
    {
        $products = Product::where('category_id', '=', $categoryId);
        if ($request->has('select')) {
            switch ($request->get('select')) {
                case 'abc':
                    $products = $products->orderBy('title', 'asc');
                    break;
                case 'cba':
                    $products = $products->orderBy('title', 'desc');
                    break;
                case 'priceMax':
                    $products = $products->orderBy('price', 'desc');
                    break;
                case 'priceMin':
                    $products = $products->orderBy('price', 'asc');
                    break;
            }
        }
        return $products->get();
    }

    // сортировка на главной
    private function getAll($request)
    {
        $products = Product::all();
        if ($request->has('select')) {
            switch ($request->get('select')) {
                case 'abc':
                    $products = Product::orderBy('title', 'asc');
                    break;
                case 'cba':
                    $products = Product::orderBy('title', 'desc');
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
            $products = $products->get();
        }
        return $products;
    }
}
