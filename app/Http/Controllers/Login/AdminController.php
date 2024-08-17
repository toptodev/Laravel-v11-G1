<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
  public function index()
  {
    return view('login.admin.index');
  }
}
