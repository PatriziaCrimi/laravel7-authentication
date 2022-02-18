@extends('layouts.dashboard')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Create new Product</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form action="{{route('admin.products.store')}}" method="POST">
          @method('POST')
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input required type="text" class="form-control" id="inputName" aria-describedby="name" placeholder="Enter product name" name="name">
          </div>
          <div class="form-group">
            <label for="price">Price &euro;</label>
            <input required type="number" step="0.01" class="form-control" id="inputPrice" name="price">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="8" cols="80">Enter product description</textarea>
          </div>
          <div class="form-group">
            <label for="availability">Availability</label>
            <div>
              <input type="radio" name="availability" value="1">
              <span>Available</span>
            </div>
            <div>
              <input type="radio" name="availability" value="2">
              <span>Not available</span>
            </div>
          </div>
          <div class="form-group">
            <label for="buyer">Buyer</label>
            <select class="form control" name="buyer_id">
              <option value="">--select--</option>
              @foreach ($buyers as $key => $buyer)
                <option value="{{$buyer->id}}">
                  {{$buyer->name}}
                  {{$buyer->surname}}
                </option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <p>Select the categories for this Product</p>
              @foreach ($categories as $key => $category)
                <div class="form-check">
                <input name="categories[]" class="form-check-input" type="checkbox" value="{{$category->id}}">
                <label class="form-check-label">
                  {{$category->name}}
                </label>
              </div>
              @endforeach
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection
