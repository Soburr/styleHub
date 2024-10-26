<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {

        $cart = session()->get('cart', []);

        $cartProducts = Product::whereIn('id', array_keys($cart))->get();

        $cartItems = $cartProducts->map(function($product) use ($cart) {
            $product['quantity'] = $cart[$product->id];
            $product['subtotal'] = $cart[$product->id] * $product->price;

            return $product;
        });

        $total = $cartItems->sum('subtotal');

        return view('cart', compact('cartItems', 'total'));
    }
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

       return redirect(route('cart.index'));

    }

    public function remove(Request $request, $productId) {

        $cart = session()->get('cart', []);

        if(isset($cart[$productId])) {
              unset($cart[$productId]);
              session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'product removed from cart');
    }

    public function destroy() {

        session()->put('cart', []);

        return redirect()->back();
    }
}
