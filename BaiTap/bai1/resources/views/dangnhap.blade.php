<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('check')}}" method="post">
    @csrf
<label for="">Tài Khoản</label>
<input type="text" name="account" placeholder="Tên Đăng nhập"><br><br>
<label for="">Mật Khẩu</label>
<input type="text" name="password" placeholder="Nhập Mật Khẩu"><br><br>
<input type="submit" value="Đăng Nhập"><br>
</form>
@if(isset($b))
<p>{{$b}}</p>
@endif
</body>
</html>
