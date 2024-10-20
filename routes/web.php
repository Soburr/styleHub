<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('products.index');

Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');

Route::post('/cart', [CartController::class, 'store'])->name('cart.store');