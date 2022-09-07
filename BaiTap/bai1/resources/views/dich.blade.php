<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('translate')}}" method="post">
@csrf
Nhập Từ muốn dịch <input type="text" name="words"><br>
<input type="submit" value="Dịch">
</form>
@if (isset($b) && $b)
 <p>Nghĩa của từ '{{$words}}' Là '{{$b}}'</p><br>

@endif
</body>
</html>
