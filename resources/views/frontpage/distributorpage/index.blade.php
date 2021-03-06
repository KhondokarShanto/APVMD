@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
          <div class="card-header">
            {{_('Distributor')}}
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
            {{_('Become a distributor')}}
          </div>
          <form id="distributor" action="{{ route('distributor_create') }}" method="post">
            @csrf
            <div>
              <label for="name"><b>Name</b></label>
              <input type="text" name="name" placeholder="Enter Name" required>
            </div>
            <div>
              <label for="email"><b>E-mail</b></label>
              <input type="text" name="email" placeholder="email" required>
            </div>
            <div>
              <label for="phone"><b>Phone</b></label>
              <input type="text" name="phone" placeholder="phone" required>
            </div>
            <div>
              <label for="details"><b>Details</b></label>
              <input type="text" name="details" placeholder="details" required>
            </div>
            <div>
              <a href="{{'/store/distributor'}}"><button type="submit" class="btn btn-primary">Create</button></a>
            </div>
          </form>
        </div>
      </div>
@endsection
