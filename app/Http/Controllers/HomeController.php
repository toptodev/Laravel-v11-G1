<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
  public function index()
  {
    $banners =  Banner::limit(5)->get();
    $banners->map(function ($banner) {
      $banner->cover = _fileExists('banner/' . gen_folder($banner->id) . '/', $banner->cover) ?
        Storage::url('banner/' . gen_folder($banner->id) . '/' . $banner->cover) :
        __via_placeholder(1920, 476);

      return $banner;
    });

    $data['banners'] = $banners;


    $products =  Product::where('types', 'like',  '%recommand%')->limit(8)->get();
    $products->map(function ($product) {
      $product->cover = _fileExists('product/' . gen_folder($product->id) . '/', $product->cover) ?
        Storage::url('product/' . gen_folder($product->id) . '/' . $product->cover) :
        __via_placeholder(600, 400);

      return $product;
    });

    $data['products'] = $products;


    return view('index', $data);
  }
}
