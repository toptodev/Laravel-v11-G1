<?php

namespace App\Http\Controllers;

use App\Models\Product;


class HomeController extends Controller
{
  public function index()
  {
    // $products = \DB::table('products')->get();
    // dd($products);

    $data['products'] = Product::all();
    // dd($products);

    return view('index', $data);
  }
}
