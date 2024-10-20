<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request) {
       $request->validate([
         'product_id' => 'required|exists:products,id'
       ]);

       $cart = session()->get('cart', []);

       if(isset($cart[$request->product_id])) {
          $cart[$request->product_id]++;
       } else {
          $cart[$request->product_id] = 1;
       }

       session()->put('cart', $cart);

       return redirect()->back();

    }
}
