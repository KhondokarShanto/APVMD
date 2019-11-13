@extends('backend.index');

@section('content')
<div class="card">
  <h2>All Products</h2>
  <div>
    <a class="btn-success" href="{{'/create/product'}}">Create Products</a>
  </div>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Product</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
        <tr>
          <td>{{$product ->id}}</td>
          <td>{{$product ->name}}</td>
          <td>{{$product ->email}}</td>
          <td>{{$product ->phone}}</td>
          <td>{{$product ->product}}</td>
          <td><a class="btn btn-success" href="">Update</a> <b></b><a class="btn btn-danger" href="">Delete</a></td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>
@endsection
