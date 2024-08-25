<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('index');
});

Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
