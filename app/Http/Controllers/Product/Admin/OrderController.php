<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Request;

class OrderController extends Controller
{
  private function render(string $view, array $params = [])
  {
    $params['page_title'] = "สั่งซื้อ";
    $params['page_subtitle'] = "สามารถ เพิ่มและแก้ไขข้อมูลสั่งซื้อได้";

    return view($view, $params);
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $orders = Order::orderByDesc('id')->paginate(20);

    return $this->render('order.admin.index', compact('orders'));
  }

  ///**
  // * Display the specified resource.
  // */
  public function show(string $id)
  {
    $order = Order::findOrFail($id);

    return $this->render('order.admin.show', compact('order'));
  }

  public function status(Request $request, $id, $status)
  {
    $order = Order::findOrFail($id);
    $order->status = $status;
    $order->save();

    return redirect()->route('admin.orders.index');
  }

  public function destroy(string $id)
  {
    Order::findOrFail($id)->delete();

    return redirect()->route('admin.orders.index');
  }
}
