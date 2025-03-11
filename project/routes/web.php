<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// http://127.0.0.1:8000 base URL
// GET, POST, PUT, PATCH, DELETE
Route::get('/', function () {
    return view('welcome');

// Điều hướng qua action của controller
// php artisan make:controller Tên controller 
});

Route::get('list-product', [ProductController::class, 'showProduct']);
// Gửi dữ liệu qua Controller
// Slug

// http://127.0.0.1:8000/get-product/4
Route::get('get-product/{id}', [ProductController::class, 'getProduct']);

// http://127.0.0.1:8000/get-product/4/abc
// Route::get('get-product/{id}/{name}', [ProductController::class, 'getProduct']);
// Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);

// Params
// http://127.0.0.1:8000/update-product?id=4&name=iphone
Route::get('update-product', [ProductController::class, 'updateProduct']);


