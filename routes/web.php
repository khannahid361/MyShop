<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/shop', [ProductController::class, 'index'])->name('shop');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
