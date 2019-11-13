
<div class="container">

  <div class="card">

  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Area</th>
    </tr>
  </thead>
  <tbody>
    @foreach($areas as $area)
        <tr>
          <td>{{$area ->id}}</td>
          <td>{{$area ->name}}</td>
          <td>{{$area ->email}}</td>
          <td>{{$area ->phone}}</td>
          <td>{{$area ->area}}</td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>
</div>
