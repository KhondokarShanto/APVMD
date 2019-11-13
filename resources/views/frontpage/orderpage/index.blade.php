@extends('layouts.app')

@section('title')

@endsection


@section('content')
<!-- <div class="container"> -->
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                <div class="card">
                  <div class="card-header">
                    {{_('Order')}}
                  </div>
                  <p>
                    We do something that brings you together and give great support
                  </p>
                  <p>
                    contact us
                  </p>
                  <p>
                    01521320834
                  </p>
                </div>

                <div class="card">
                  <div class="card-header">
                    {{_('Confirm Your Order')}}
                  </div>
                  <form id="order" action="{{ route('order_create') }}" method="post">
                    @csrf

                    <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                      <div class="col-md-6">
                      <input type="text" name="name" placeholder="Enter Name" required="required" autofocus="autofocus" class="form-control ">
                    </div>
                    </div>
                    <div class="form-group row">
                       <label for="email"class="col-md-4 col-form-label text-md-right">Email</label>
                        <div class="col-md-6">
                      <input type="text" name="email" placeholder="Enter Email" required="required" autofocus="autofocus" class="form-control">
                    </div>
                    </div>
                    <div class="form-group row">
                      <label for="phone"class="col-md-4 col-form-label text-md-right">Phone</label>
                      <div class="col-md-6">
                      <input type="number" name="phone" placeholder="Enter phone" required="required" autofocus="autofocus" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6">
                      <textarea name="order" rows="4" cols="50" placeholder="Write here your order..."></textarea>
                    </div>
                    <div class="form-group row">
                    <div class="col-md-6">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                  </form>
    </div>
</div>
@endsection
