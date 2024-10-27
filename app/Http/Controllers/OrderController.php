<?php

namespace App\Http\Controllers;

use App\Models\Order;
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

        $request->validate([
            'first_name' => 'required',
            'last' => 'required',
            'email' => 'required|email',
            'street_address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip' => 'required',
        ]);

        Order::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'street_address' => $request->street_address,
            'state' => $request->state,
            'city' => $request->city,
            'zip' => $request->zip,
        ]);

    }
}
