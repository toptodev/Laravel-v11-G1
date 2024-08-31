<?php

use App\Http\Controllers\Banner\Admin\BannerController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
  Route::resource('banners', BannerController::class);
});
