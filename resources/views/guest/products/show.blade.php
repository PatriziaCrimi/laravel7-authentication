@extends('layouts.app')

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
              {{$product->buyer->name}}
              {{$product->buyer->surname}}
            @else
              -
            @endif
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection
