<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('product.cart.index');
  }

  public function checkout()
  {
    return view('product.cart.checkout');
  }

  public function save(Request $request)
  {
    $rules = [
      'name' => 'required|string|max:255',
      'email' => 'required|email|max:255',
      'tel' => 'required|string|max:255',
      'destination' => 'required|string|max:255',
      'payment.channel' => 'required|in:internet_bankg,pay_online'
    ];

    $messages = [
      'name.required' => 'โปรดระบุชื่อ-นามสกุล',
      'email.required' => 'โปรดระบุที่อยู่อีเมล์',
      'email.email' => 'รูปแบบอีเมล์ไม่ถูกต้อง',
      'tel.required' => 'โปรดระบุเบอร์โทรศัพท์',
      'destination.required' => 'โปรดระบุที่อยู่จัดส่งสินค้า'
    ];

    $validator = Validator::make($request->all(), $rules, $messages);
    if ($validator->fails()) {
      return redirect()->back()->withErrors($validator)->withInput();
    }

    return redirect()->route('carts.success');
  }

  public function success()
  {
    return view('product.cart.success');
  }
}
