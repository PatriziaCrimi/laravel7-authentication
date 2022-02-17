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
  </div>
@endsection
