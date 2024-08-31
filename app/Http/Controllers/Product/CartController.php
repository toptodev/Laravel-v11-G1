<?php

namespace App\Http\Controllers\Product;

use App\CustomClass\Cart;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    if (!Session::has('cart')) {
      return view('product.cart.index');
    }

    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    $data = [
      'items' => $cart->items,
      'shoppingCost' => $cart->shoppingCost,
      'totalPrice' => $cart->totalPrice,
    ];

    return view('product.cart.index', $data);
  }

  public function checkout()
  {
    if (!Session::has('cart')) {
      return view('product.cart.index');
    }

    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    $data = [
      'items' => $cart->items,
      'shoppingCost' => $cart->shoppingCost,
      'totalPrice' => $cart->totalPrice,
    ];

    return view('product.cart.checkout', $data);
  }

  public function addToCart(Request $request, $id)
  {
    $product = Product::findOrFail($id);

    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->add($product->getAttributes(), $product->id);

    $request->session()->put('cart', $cart);

    return redirect()->route('carts.index');
  }

  public function reduceByOne(Request $request, $id)
  {
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->reduceByOne($id);

    if (count($cart->items) > 0) {
      Session::put('cart', $cart);
    } else {
      Session::forget('cart');
    }

    return redirect()->route('carts.index');
  }

  public function plusByOne(Request $request, $id)
  {
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->plusByOne($id);

    if (count($cart->items) > 0) {
      Session::put('cart', $cart);
    } else {
      Session::forget('cart');
    }

    return redirect()->route('carts.index');
  }

  public function removeItem(Request $request, $id)
  {
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->removeItem($id);

    if (count($cart->items) > 0) {
      Session::put('cart', $cart);
    } else {
      Session::forget('cart');
    }

    return redirect()->route('carts.index');
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

    $oldCart = Session::get('cart');
    $request->request->add([
      'items' =>  $oldCart->items,
      'shipping_cost' => $oldCart->shoppingCost,
      'amount' => $oldCart->totalPrice,
    ]);

    $result =  Order::create($request->all());
    if ($result) {
      Session::forget('cart');

      // send mail
      // line notify
    }

    return redirect()->route('carts.success');
  }

  public function success(Request $request)
  {
    return view('product.cart.success');
  }

  public function reset()
  {
    Session::forget('cart');

    return redirect()->route('order.index');
  }
}
