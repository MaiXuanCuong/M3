<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="{{ route('caculater') }}" method="post">
        @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nhập số thứ nhất</label>
      <input type="number" name="numberOne" class="form-control" >
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Phép tính</label>
     <select class="form-control" name="calculation" id="">
        <option value="+">Cộng</option>
        <option value="-">Trừ</option>
        <option value="*">Nhân</option>
        <option value="/">Chia</option>
     </select>
    </div>
    <div class="mb-3">
        <label class="form-check-label" for="exampleCheck1"></label>Nhập số thứ hai
        <input type="number" name="numberTwo" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Tính</button>
  </form>
@if(isset($result))
<p>Kết quả là: {{ $result }}</p>
@endif
</body>
</html>
