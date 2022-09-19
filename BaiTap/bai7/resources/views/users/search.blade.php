@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Search result') }}</div>
                    <div class="card-body">
                        <h3 class="page-title text-center">{{ __('User found:') }} {{ $user->name }}</h3>
                        <b>{{ __('Email') }}</b>: {{ $user->email }}
                        <br>
                        <b>{{ __('Registered on') }}</b>: {{ $user->created_at }}
                    </div>
                    <div class="card-footer">
                        <div class="col-md-8 offset-md-5">
                            <a href="{{ route('users.index') }}" class="btn btn-primary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection