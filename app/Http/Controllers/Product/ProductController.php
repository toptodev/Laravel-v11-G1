<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $products = Product::orderByDesc('id')->paginate(20);
    $products->getCollection()->transform(function ($product) {
      $product->cover = _fileExists('product/' . gen_folder($product->id) . '/', $product->cover) ?
        Storage::url('product/' . gen_folder($product->id) . '/' . $product->cover) :
        __via_placeholder(600, 400);

      return $product;
    });

    return view('product.index', compact('products'));
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $product = Product::findOrFail($id);

    return view('product.show', compact('product'));
  }
}
