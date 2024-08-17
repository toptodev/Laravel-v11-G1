<?php

use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', [ProductController::class, 'index']);
Route::get('products/create', [ProductController::class, 'create']);
Route::post('products', [ProductController::class, 'store']);
Route::get('products/{product}', [ProductController::class, 'show']);
Route::get('products/{product}/edit', [ProductController::class, 'edit']);
Route::put('products/{product}', [ProductController::class, 'update']);
Route::delete('products', [ProductController::class, 'destroy']);
