<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create() {

        $cart = session()->get('cart', []);

        $cartProducts = Product::whereIn('id', array_keys($cart))->get();

        $cartItems = $cartProducts->map(function($product) use ($cart) {
            $product['quantity'] = $cart[$product->id];
            $product['subtotal'] = $cart[$product->id] * $product->price;

            return $product;
        });

        $total = $cartItems->sum('subtotal');

        return view('checkout', compact('cartItems', 'total'));

    }

    public function store(Request $request) {
    
    }
}
