@extends('layouts.app')
@section('content')
<div class="container">

  <div class="card">

  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>

    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
        <tr>
          <td>{{$task ->id}}</td>
          <td>{{$task ->name}}</td>
          <td>{{$task ->email}}</td>
          <td>{{$task ->phone}}</td>
        
        </tr>
        @endforeach
  </tbody>
</table>
</div>
</div>
@endsection
