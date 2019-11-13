@extends('backend.index');

@section('content')
    <div class="card">
      <h2>Role</h2>
      <div>
        <a class="btn-success" href="">Create Role</a>
      <div class="card">
        <div class="card-header">{{ __('Create User Roles') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('role_create') }}">
                                @csrf


                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Role Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>
                                        <button class="btn btn-primary">
                                            {{ __('Back') }}
                                        </button>


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

    </div>
    </div>
  </div>
</div>
@endsection
