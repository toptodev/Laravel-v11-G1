<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('product.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {

    return view('product.show');
  }
}
