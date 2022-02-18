<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Buyer;
use App\Category;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = [
      'products' => Product::all()
    ];
    return view('admin.products.index', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $data = [
      'buyers' => Buyer::all(),
      'categories' => Category::all()
    ];
    return view('admin.products.create', $data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $request->all();
    $new_product = new Product();
    $new_product->fill($data);
    $new_product->save();
    //Categories (ManyToMany)
    $new_product->categories()->sync($data['categories']);
    return redirect()->route('admin.products.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $product = Product::find($id);
    if($product) {
      return view('admin.products.show', compact('product'));
    } else {
      abort(404);
    }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Product $product)
  {
    $buyers = Buyer::all();
    $categories = Category::all();
    if($product) {
      return view('admin.products.edit', compact('product', 'buyers', 'categories'));
    } else {
      abort(404);
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Product $product)
  {
    $data = $request->all();
    $product->update($data);
    //Categories (ManyToMany)
    $product->categories()->sync($data['categories']);
    return redirect()->route('admin.products.show', ['product' => $product->id]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Product $product)
  {
    $product->categories()->sync([]);
    $product->delete();
    return redirect()->route('admin.products.index');
  }
}
