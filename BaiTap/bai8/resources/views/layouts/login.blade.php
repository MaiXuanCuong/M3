@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Đăng nhập
    </div>
    <div class="form-login">
        <form class="text-left" method="post" action="{{ route('user.login') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputUsername">Tên người dùng</label>
                <input type="text"
                       class="form-control"
                       id="inputUsername"
                       name="inputUsername"
                       placeholder="Enter username"
                       required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password"
                       class="form-control"
                       id="inputPassword"
                       name="inputPassword"
                       placeholder="Password"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
        @if (Session::has('login-fail'))
    <div class="login-fail">
        <p class="text-danger">{{ Session::get('login-fail') }}</p>
    </div>
@endif
@if (Session::has('not-login'))
    <div class="not-login">
        <p class="text-danger">{{ Session::get('not-login') }}</p>
    </div>
@endif 
    </div>
@endsection