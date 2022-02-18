@extends('layouts.dashboard');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Category Details # {{$category->id}}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <ul>
          <li>
            Name: {{$category->name}}
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        Products List related to this Category:
        @if ($category->products->isNotEmpty())
          <ul>
            @foreach ($category->products as $key => $product)
              <li>
                <a href="{{route('admin.products.show', ['product' => $product->id])}}">
                  {{$product->name}}
                </a>
              </li>
            @endforeach
          </ul>
        @else
          -
        @endif
      </div>
    </div>
  </div>
@endsection
