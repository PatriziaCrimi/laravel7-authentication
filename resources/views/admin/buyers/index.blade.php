@extends('layouts.dashboard')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        Buyers List
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <ul>
          @foreach ($buyers as $key => $buyer)
            <li>
              {{$buyer->name . ' ' . $buyer->surname}}
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
