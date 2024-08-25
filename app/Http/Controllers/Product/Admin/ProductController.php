<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('product.admin.index');
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
        'title'  => 'required|string',
        'cover' => 'required|image|max:3072|mimes:jpg,jpeg,png,webp'
      ],
      [
        'title.required' => 'โปรดระบุชื่อสินค้า',
        'cover.required' => 'โปรดแนบรูปภาพหน้าปก',
        'cover.max' => 'ภาพหน้าต้องมีขนาดไม่เกิน 3 MB',
        'cover.mimes' => 'ภาพหน้าปกต้องมีนามสกุล *.jpg, *.jpeg, *.png',
      ]
    );

    return $request->all();
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $validated = $request->validate(
      [
        'title'  => 'required|string',
      ],
      [
        'title.required' => 'โปรดระบุชื่อสินค้า',
      ]
    );
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
