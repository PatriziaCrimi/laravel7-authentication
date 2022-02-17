@extends('layouts.dashboard');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Buyer Details # {{$buyer->id}}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <ul>
          <li>
            Name: {{$buyer->name . ' ' . $buyer->surname}}
          </li>
          <li>
            Address: {{$buyer->address}}
          </li>
          <li>
            City: {{$buyer->city}}
          </li>
          <li>
            Country: {{$buyer->country}}
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        Products List related to this Buyer:
        <ul>
          @foreach ($buyer->products as $key => $product)
            <li>
              <a href="{{route('admin.products.show', ['product' => $product->id])}}">
                {{$product->name}}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
