@extends('backend.index');

@section('content')
    <div class="card">
      <h2>All Orders</h2>
      <div>
        <a class="btn-success" href="{{'/create/order'}}">Create Order</a>
      <div class="card">

      <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Order</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
        @foreach($orders as $order)
            <tr>
              <td>{{$order ->id}}</td>
              <td>{{$order ->name}}</td>
              <td>{{$order ->email}}</td>
              <td>{{$order ->phone}}</td>
              <td>{{$order ->order}}</td>
              <td><a class="btn btn-success" href="">Update</a> <b></b><a class="btn btn-danger" href="">Delete</a></td>
            </tr>
            @endforeach
      </tbody>
    </table>
    </div>
    </div>
@endsection
