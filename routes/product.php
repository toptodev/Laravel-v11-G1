<?php

use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Product\CartController;
use Illuminate\Support\Facades\Route;


// Admin Product Routes
Route::prefix('admin')->name('admin.')->group(function () {
  Route::resource('products', AdminProductController::class);
});

// Product Routes
Route::resource('products', ProductController::class)->only([
  'index',
  'show'
]);


// Cart Routes
Route::group([
  'prefix' => 'carts',
  'as' => 'carts.',
], function () {
  Route::controller(CartController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('checkout', 'checkout')->name('checkout');
    Route::post('checkout', 'save')->name('save');
    Route::get('success', 'success')->name('success');
  });
});
