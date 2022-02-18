<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function index() {
    $categories = Category::all();
    return view('guest.categories.index', compact('categories'));
  }

  public function show(Category $category) {
    if(!$category) {
      abort(404);
    }
    return view('guest.categories.show', compact('category'));
  }
}
