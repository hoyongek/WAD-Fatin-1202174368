<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/home', function () {
    return view('home');
});

Route::resource('products', ProductController::class);
Route::get('/product', function () {
    return view('products/index');
});


Route::get('/order', function () {
    return view('order');
});


Route::get('/history', function () {
    return view('history');
});