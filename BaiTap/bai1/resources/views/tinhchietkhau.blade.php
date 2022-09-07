<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route("calculate")}}" method="post">
@csrf
Tên Sản Phẩm <input type="text" name="name"><br><br>
Giá Sản Phẩm <input type="text" name="price"><br><br>
Giảm giá<input type="text" name="discount"><br><br>
<input type="submit" name="Tính">
</form>
@if(isset($name))
<p>Tên Sản Phẩm {{$name}}</p>
<p>Giá Sản Phẩm {{$price}} VNĐ</p>
<p>Giảm giá {{$discount}} %</p>
<p>Được Giảm Giá {{$result}} VNĐ</p>
<p>Số Tiền phải Trả {{$result1}} VNĐ</p>
@endif
</body>
</html>
