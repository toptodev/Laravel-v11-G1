<?php

namespace App\Http\Controllers;

use App\Models\Product;


class HomeController extends Controller
{
  public function index()
  {
    $data['products'] = Product::where('types', 1)->limit(8)->get();

    return view('index', $data);
  }
}
