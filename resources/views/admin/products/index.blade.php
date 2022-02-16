@extends('layouts.dashboard')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Products List</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a class="btn btn-dark float-right" href="{{route('admin.products.create')}}">New Product</a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $key => $product)
              <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{number_format($product->price, '2', ',', '.')}} &euro;</td>
                <td>
                  <a href="{{route('admin.products.show', ['product' => $product->id])}}" class="btn btn-info">Details</a>
                  <a href="{{route('admin.products.edit', ['product' => $product->id])}}" class="btn btn-light">Edit</a>
                  <button type="submit" name="button" class="btn btn-danger">Delete</button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
