@extends('layouts.app');

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Categories List</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <ul>
          @foreach ($categories as $key => $category)
            <li>
              <a href="{{route('categories.show', ['category' => $category->id])}}">
                {{$category->name}}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
