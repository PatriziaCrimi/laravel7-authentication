@extends('layouts.dashboard')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Edit Product {{$product->id}}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input required type="text" class="form-control" id="inputName" aria-describedby="name" placeholder="Enter product name" name="name" value="{{$product->name}}">
          </div>
          <div class="form-group">
            <label for="price">Price &euro;</label>
            <input required type="number" step="0.01" class="form-control" id="inputPrice" name="price" value="{{$product->price}}">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="8" cols="80">{{$product->description}}</textarea>
          </div>
          <div class="form-group">
            <label for="availability">Availability</label>
            <div>
              <input type="radio" name="availability" value="1"
              {{$product->availability == 1 ? 'checked=checked' : ''}}>
              <span>Available</span>
            </div>
            <div>
              <input type="radio" name="availability" value="0"
              {{$product->availability == 0 ? 'checked=checked' : ''}}>
              <span>Not available</span>
            </div>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection
