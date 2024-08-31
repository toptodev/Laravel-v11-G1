<?php

use App\Http\Controllers\Product\Admin\OrderController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
  Route::resource('orders', OrderController::class);

  Route::group([
   'prefix' => 'orders',
   'as' => 'orders.',
  ], function () {
   Route::controller(OrderController::class)->group(function () {
     Route::get('status/{id}/{status}', 'status')->name('status');
   });
  });
});