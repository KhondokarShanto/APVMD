
<div class="container">

  <div class="card">

  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Feedback</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
        <tr>
          <td>{{$contact ->id}}</td>
          <td>{{$contact ->name}}</td>
          <td>{{$contact ->email}}</td>
          <td>{{$contact ->phone}}</td>
          <td>{{$contact ->feedback}}</td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>
</div>
