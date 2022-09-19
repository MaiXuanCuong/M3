@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Search for user by ID') }}</div>
                    <div class="card-body">
                        <form action="{{ route('users.search') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('User ID') }}</label>
                                <div class="col-md-6">
                                    @if(session()->has('errors'))
    <div class="alert alert-danger text-center">{{ session()->get('errors')}}</div>
@endif
                                    <input id="user_id" class="form-control" name="user_id" type="number" value="{{ old('user_id') }}" placeholder="User ID" required>
                                    @if ($errors->has('user_id'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-5">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Search') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection