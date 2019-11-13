@extends('backend.index');

@section('content')
<div class="card">
  <h2>All Suppliers</h2>
  <div>
    <a class="btn-success" href="{{'/create/supplier'}}">Add New Suppliers</a>
  </div>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Details</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($suppliers as $supplier)
        <tr>
          <td>{{$supplier ->id}}</td>
          <td>{{$supplier ->name}}</td>
          <td>{{$supplier ->email}}</td>
          <td>{{$supplier ->phone}}</td>
          <td>{{$supplier ->details}}</td>
          <td><a class="btn btn-success" href="">Update</a> <b></b><a class="btn btn-danger" href="">Delete</a></td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>
@endsection
