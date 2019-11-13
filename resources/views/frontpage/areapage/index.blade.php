@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
          <div class="card-header">
            {{_('Areas')}}
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
            {{_('Recomend the areas we can cover')}}
          </div>
          <form id="area" action="{{ route('area_create') }}" method="post">
            @csrf
            <div>
              <label for="name"><b>Name</b></label>
              <input type="text" name="name" placeholder="Enter Name" required>
            </div>
            <div>
              <label for="name"><b>Area Code</b></label>
              <input type="text" name="code" placeholder="Area Code" required>
            </div>
            <div>
              <a href="{{'/store/area'}}"><button type="submit" class="btn btn-primary">Create</button></a>
            </div>
          </form>
        </div>
      </div>
@endsection
