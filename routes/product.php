<?php

use App\Http\Controllers\Product\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Product\CartController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;


// Admin Product Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
  Route::resource('products', AdminProductController::class);

  Route::group([
    'prefix' => 'products',
    'as' => 'products.',
  ], function () {
    Route::controller(AdminProductController::class)->group(function () {
      Route::post('images-sort/{id}', 'imagesSort')->name('images-sort');
      Route::post('images-destroy/{id}', 'imagesDestroy')->name('images-destroy');
    });
  });
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
    Route::get('add-to-cart/{slug}', 'addToCart')->name('addToCart');
    Route::get('reduce/{slug}', 'reduceByOne')->name('reduceByOne');
    Route::get('plus/{slug}', 'plusByOne')->name('plusByOne');
    Route::get('remove/{slug}', 'removeItem')->name('removeItem');
    Route::get('reset', 'reset')->name('reset');

    Route::get('/', 'index')->name('index');
    Route::get('checkout', 'checkout')->name('checkout');
    Route::post('checkout', 'save')->name('save');
    Route::get('success', 'success')->name('success');
  });
});
