
<div class="container">

  <div class="card">

  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Product</th>
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
        </tr>
        @endforeach
  </tbody>
</table>
</div>
</div>
