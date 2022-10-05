<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    @include('sweetalert::alert')
    <div class="container">
      <div class="mb-3">
        <h2>Danh Mục Sách</h2><br>
        @if(isset($count))
        <b>Tổng Số Sách: {{ count($count)}}</b>
        @else
        <b>Không Có Sách</b>
        @endif
      </div>

    <table class="table">
      <a class="btn btn-primary" href="{{ route('create') }}">Thêm Sách</a>
        <thead>
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên Sách</th>
            <th scope="col">ISBN</th>
            <th scope="col">Thể Loại</th>
            <th scope="col">Số Trang</th>
            <th scope="col">Năm Xuất Bản</th>
            <th scope="col">Hành Động</th>
          </tr>
        </thead>
        <tbody>
          @if(isset($items))
          @foreach($items as $key => $item)
          <tr>
            <td>{{$key +1}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->ISBN}}</td>
            <td>{{$item->category->name}}</td>
            <td>{{$item->pages}}</td>
            <td>{{$item->years}}</td>
            <td>
              <form action="{{ route('delete',$item->id) }}" method="post">
                @csrf
                @method('delete')
                <a class="btn btn-primary" href="{{ route('edit',$item->id) }}">Sửa</a>
                <input type="submit" class="btn btn-danger" value="Xóa">
                </form>
            </td>
          </tr>
          @endforeach
          @endif
        </tbody>
      </table>
      {{ $items->appends(request()->all())->links() }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
