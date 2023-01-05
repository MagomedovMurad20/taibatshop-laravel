<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart_id = $request->cookie('cart_id'); //получаем значение куки и называем 'cart_id' и записываем в переменную $cart_id;
        if (!empty($cart_id)) {
            $products = Cart::findOrFail($cart_id)->products;
            return view('mytemp.pages.cart', compact('products'))->with('info', 'Товар добавлен в корзину');
        } else {
            abort(404);
        }
    }
    /* ... */
    public function smallcart(Request $request)
    {
        $cart_id = $request->cookie('cart_id'); //получаем значение куки и называем 'cart_id' и записываем в переменную $cart_id;
        if (!empty($cart_id)) {
            $products = Cart::findOrFail($cart_id)->products;
            return view('mytemp.cart.smallcart', compact('products'));
        }
    }
    /* ... */


    public function order()
    {
        return view('mytemp.cart.order');
    }

    /**
     * Добавляет товар с идентификатором $id в корзину
     */
    public function add(Request $request, $id)
    {
        $cart = Cart::create();
        var_dump(get_object_vars($cart));
        $cart_id = $request->cookie('cart_id');
        $quantity = $request->input('quantity') ?? 1; //если в инпуте есть колчество, то = quantity, иначе 1
        if (empty($cart_id)) {
            // если в coockie не нашли то создаем 
            $cart = Cart::create(); //создаем объектб.строку в таблице carts
            $cart_id = $cart->id; // получаем id из строки из таблицы carts

        } else {
            // а если нашли в куки
            $cart = Cart::findOrFail($cart_id); //ищем эту строку в базе данных
            $cart->touch(); // обновляем поле `updated_at` таблицы `carts` ( UPDATE)
        }
        if ($cart->products->contains($id)) {
            // если такой товар есть в корзине — изменяем кол-во
            $pivotRow = $cart->products()->where('product_id', $id)->first()->pivot;
            //таблице cart_product ищем запись с такими данными
            $quantity = $pivotRow->quantity + $quantity; //увеличиваем количество
            $pivotRow->update(['quantity' => $quantity]); //в таблицу carts добавляется весь товарб обновляем количество в базе данных
        } else {
            // если такого товара нет в корзине — добавляем его
            $cart->products()->attach($id, ['quantity' => $quantity]);
        }
        // выполняем редирект обратно на страницу, где была нажата кнопка «В корзину»
        return back()->withCookie(cookie('cart_id', $cart_id, 525600));
    }
}
