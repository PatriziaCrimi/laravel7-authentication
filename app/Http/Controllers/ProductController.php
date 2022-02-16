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
}
