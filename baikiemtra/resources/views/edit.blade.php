<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sửa Sách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    @include('sweetalert::alert')
    <div class="container">
    <form action="{{ route('update',$item->id) }}" method="post">
      @method('PUT')
        @csrf
    <div class="mb-3">
      <h2>Sửa Sách</h2>
    </div>
      
      <div class="row">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tên Sách</label>
        <input type="text" name="name" value="{{ $item->name }}" class="form-control" id="exampleFormControlInput1" placeholder="Tên Sách">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tác Giả</label>

         <select name="author_id" id="" class="form-control">
          @foreach ($authors as $author)
          <option <?= $author->id == $item->author_id ? 'selected' : ' ' ?>
              value="{{ $author->id }}">{{ $author->name }}</option>
      @endforeach
                    </select>
                    @error('author_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
      </div>
    </div>
    <div class="row">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">ISBN</label>
        <input type="text" name="ISBN" value="{{ $item->ISBN }}" class="form-control" id="exampleFormControlInput1" placeholder="ISBN">
        @error('ISBN')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Thể Loại</label>
        <select name="category_id" id="" class="form-control">
          @foreach ($categories as $category)
          <option <?= $category->id == $item->category_id ? 'selected' : ' ' ?>
              value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
        </select>
        @error('category_id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
    </div>
    <div class="row">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Số Trang</label>
        <input type="text" name="pages" value="{{ $item->pages }}" class="form-control" id="exampleFormControlInput1" placeholder="Số Trang">
        @error('pages')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Năm Xuất Bản</label>
        <input type="text" name="years" value="{{ $item->years }}" class="form-control" id="exampleFormControlInput1" placeholder="Năm Xuất Bản">
        @error('years')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Sửa" >
        <a class="btn btn-danger" href="{{ route('index') }}">Hủy</a>
    </div>
</form>
</div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
