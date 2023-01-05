<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartControllerNew extends Controller
{
    public function index(Request $request)
    {
        return view('mytemp.cart.cart');
    }
}
