<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('products.index');

Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::post('/cart', [CartController::class, 'store'])->name('cart.store');

Route::delete('/cart', [CartController::class, 'destroy'])->name('cart.destroy');

Route::delete('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');
