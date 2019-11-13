@extends('layouts.app')

@section('title')

@endsection


@section('content')
<div class="container">

        <div class="card">
          <div class="card-header">
            {{_('Contact Us')}}
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
            {{_('send Your Query')}}
          </div>
          <form id="contact" action="{{ route('contact_create') }}" method="post">
            @csrf

            <div>
              <label for="name"><b>Name</b></label>
              <input type="text" name="name" placeholder="Enter Name" required>
            </div>
            <div>
              <label for="email"><b>Email</b></label>
              <input type="text" name="email" placeholder="Enter Email" required>
            </div>
            <div>
              <label for="phone"><b>Phone</b></label>
              <input type="number" name="phone" required>
            </div>

            <div>
              <textarea name="feedback" rows="4" cols="50" placeholder="Write here your query..."></textarea>
            </div>
            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

          </form>


        </div>



</div>
@endsection
