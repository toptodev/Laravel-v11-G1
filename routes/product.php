<?php

use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\Admin\ProductController as AdminProductController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);

Route::prefix('admin')->name('admin.')->group(function () {
  Route::resource('products', AdminProductController::class);
});
