
<div class="container">

  <div class="card">

  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Order</th>
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
        </tr>
        @endforeach
  </tbody>
</table>
</div>
</div>
