<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $products = $this->products();

    return view('products.index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $product = $this->products($id);

    return view('products.show', compact('product'));
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
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }

  private function products($id = "")
  {
    $array = [
      [
        'name' => 'ช็อกโกแลตบอล',
        'price' => '10 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ลูกอมชุปช็อกโกแลต',
        'price' => '5 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'บ๊วยห่อ',
        'price' => '3 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'กระดาษสาหร่าย',
        'price' => '2 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'เฮลโลคิตตี้',
        'price' => '12 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ลูกอมมะนาว',
        'price' => '4 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ขนมผิง',
        'price' => '6 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ช็อกโกแลตลายทาง',
        'price' => '8 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ลูกอมไอศกรีม',
        'price' => '7 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'มินิเบอร์รี่',
        'price' => '5 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'เยลลี่ผลไม้',
        'price' => '9 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ลูกอมรสชาติเปรี้ยว',
        'price' => '4 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ถั่วลิสงเคลือบน้ำตาล',
        'price' => '11 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ขนมโดเรมอน',
        'price' => '12 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ลูกอมเคี้ยวหนึบ',
        'price' => '6 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ขนมปังปิ้งรสช็อกโกแลต',
        'price' => '7 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ลูกอมรสหวาน',
        'price' => '3 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'พริกป่นรสชาติขนม',
        'price' => '5 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ขนมเหนียว',
        'price' => '8 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ลูกอมรสเปรี้ยว',
        'price' => '4 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ขนมกล้วย',
        'price' => '7 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ],
      [
        'name' => 'ขนมเยลลี่รูปสัตว์',
        'price' => '10 บาท',
        'image' => 'https://placehold.co/240x240/EEE/31343C?font=lato'
      ]
    ];

    return $id == "" ? $array : $array[$id];
  }
}
