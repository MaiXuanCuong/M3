@extends('admin.layouts.master')
@section('content')
{{ $user_name }}
<form action="{{ route('products.store') }}" method="post">
    @csrf
    <label for="">Username</label>
    <input type="text" name="username" id="">
    <br>
    <label for="">Password</label>
    <input type="text" name="password" id="">
    <br>
    <input type="submit" value="Login">
</form>
@endsection