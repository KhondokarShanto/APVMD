@extends('backend.index');

@section('content')
  <div class="card">
    <h2>All Areas</h2>
    <div>
      <a class="btn-success" href="{{'/create/area'}}">Create Area</a>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Area-Code</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
        @foreach($areas as $area)
          <tr>
            <td>{{$area ->id}}</td>
            <td>{{$area ->name}}</td>
            <td>{{$area ->code}}</td>
            <td><a class="btn btn-success" href="">Update</a> <b></b><a class="btn btn-danger" href="">Delete</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
