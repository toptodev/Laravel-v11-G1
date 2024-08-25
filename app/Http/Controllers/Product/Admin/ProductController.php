<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $products = Product::orderByDesc('id')->paginate(20);

    return view('product.admin.index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('product.admin.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {

    $validated = $request->validate(
      [
        "code" => 'required|string',
        "title" => 'required|string',
        "price_actual" => 'required|string',
        "price" => 'required|string',

        // 'cover' => 'required|image|max:3072|mimes:jpg,jpeg,png,webp'
      ],
      [
        'code.required' => 'โปรดระบุรหัสสินค้า',
        'title.required' => 'โปรดระบุชื่อสินค้า',
        'price_actual.required' => 'โปรดระบุราคาจริง',
        'price.required' => 'โปรดระบุราคาขาย',

        // 'cover.required' => 'โปรดแนบรูปภาพหน้าปก',
        // 'cover.max' => 'ภาพหน้าต้องมีขนาดไม่เกิน 3 MB',
        // 'cover.mimes' => 'ภาพหน้าปกต้องมีนามสกุล *.jpg, *.jpeg, *.png',
      ]
    );

    Product::create($request->all());

    return redirect()->route('admin.products.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $product = Product::findOrFail($id);

    return view('product.admin.show', compact('product'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $product = Product::findOrFail($id);

    return view('product.admin.edit', compact('product'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $validated = $request->validate(
      [
        "code" => 'required|string',
        "title" => 'required|string',
        "price_actual" => 'required|string',
        "price" => 'required|string',

        // 'cover' => 'required|image|max:3072|mimes:jpg,jpeg,png,webp'
      ],
      [
        'code.required' => 'โปรดระบุรหัสสินค้า',
        'title.required' => 'โปรดระบุชื่อสินค้า',
        'price_actual.required' => 'โปรดระบุราคาจริง',
        'price.required' => 'โปรดระบุราคาขาย',

        // 'cover.required' => 'โปรดแนบรูปภาพหน้าปก',
        // 'cover.max' => 'ภาพหน้าต้องมีขนาดไม่เกิน 3 MB',
        // 'cover.mimes' => 'ภาพหน้าปกต้องมีนามสกุล *.jpg, *.jpeg, *.png',
      ]
    );

    Product::findOrFail($id)->update($request->all());

    return redirect()->route('admin.products.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    Product::findOrFail($id)->delete();

    return redirect()->route('admin.products.index');
  }
}
