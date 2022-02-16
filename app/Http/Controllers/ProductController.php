<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
  public function index() {
    $data = [
      'products' => Product::all()
    ];
    return view('guest.products.index', $data);
  }

  public function show($id) { //Dependency Injection
    $product = Product::find($id);
    $data = [
      'product' => $product
    ];
    return view('guest.products.show', $data);
  }
}
