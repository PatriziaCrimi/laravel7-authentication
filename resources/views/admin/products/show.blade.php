@extends('layouts.dashboard')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Product Details</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <ul>
          <li>
            # {{$product->id}}
          </li>
          <li>
            {{$product->name}}
          </li>
          <li>
            {{number_format($product->price, '2', ',', '.')}}
            &euro;
          </li>
          <li>
            {{$product->description}}
          </li>
          @if ($product->availability == 1)
          <li class="font-weight-bold">
            Available
          </li>
        @elseif ($product->availability == 0)
          <li class="font-weight-bold">
            Not available
          </li>
          @endif
          <li>
            Buyer:
            @if ($product->buyer)
              <a href="{{route('admin.buyers.show', ['buyer' => $product->buyer->id])}}">
                {{$product->buyer->name . ' ' . $product->buyer->surname}}
              </a>
            @else
              -
            @endif
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p>Categories for this Product:</p>
        @if($product->categories->isNotEmpty())
          <ul>
            @foreach ($product->categories as $key => $category)
              <li>
                <a href="{{route('admin.category.show', ['category' => $category->id])}}">
                  {{$category->name}}
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
