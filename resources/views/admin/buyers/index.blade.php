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
              <a href="{{route('admin.buyers.show', ['buyer' => $buyer->id])}}">
                {{$buyer->name . ' ' . $buyer->surname}}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
