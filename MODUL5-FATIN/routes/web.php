<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/home', function () {
    return view('template');
});

Route::resource('products', ProductController::class);
Route::get('/product', function () {
    return view('products/create');
});


Route::get('/order', function () {
    return view('order');
});


Route::get('/history', function () {
    return view('history');
});