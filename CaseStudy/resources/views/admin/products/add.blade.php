@extends('admin.layouts.master')
@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

    <!-- CSS -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"> --}}
</head>
<body>
  <script type="text/javascript">
    function readURL(input) {
	if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    reader.onload = function(e) {
   	        $('#imgSrc').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);            
        }
    }
    $("#imgUpload").change(function() {
        readURL(this);  
    });
</script>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <h1>Thêm Sản Phẩm</h1>
        </div>
        <form class="text-left" method="post" action="{{route('products.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputTitle">Tên Sản Phẩm</label>
                <input type="text"
                       class="form-control"
                       id="inputTitle"
                       name="name"
                       value="{{ old('name') }}"
                       >
                       @error('name')
                       <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                    </div>
                    <div class="form-group">
                      <label for="inputTitle">Danh Mục</label>
                      <select name="category_id" id="" class="form-control">
                        @foreach($categories as $category)
                        
                        <option value="{{$category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                      
                     
                    </div>
                    <div class="form-group">
                      <label for="inputTitle">Giá</label>
                      <input type="number"
                            class="form-control"
                            id="inputTitle"
                            name="price"
                            value="{{ old('price') }}"
                            >
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                  </div>
                    <div class="form-group">
                      <label for="inputTitle">Mô Tả</label>
                     <textarea class="form-control"
                     id="inputTitle"
                     name="describe" cols="30" rows="5">{{ old('describe')}}</textarea>
                     @error('describe')
                     <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputTitle">Thông Số Kỹ Thuật</label>
                  <textarea  class="form-control"
                  id="inputTitle"
                  name="specifications" cols="30" rows="5">{{ old('describe')}}</textarea>
                  @error('specifications')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
                </div>
                <div class="form-group">
                  <label for="inputTitle">Số Lượng</label>
                  <input type="number"
                        class="form-control"
                        id="inputTitle"
                        name="quantity"
                        value="{{ old('quantity') }}"
                        >
                        @error('quantity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
              </div>
    <div class="form-group">
      <label for="inputTitle">Màu Sắc</label>
      <input type="text"
             class="form-control"
             id="inputTitle"
             name="color"
             value="{{ old('color') }}"
             >
             @error('color')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
  </div>
  <div class="form-group">
    <label for="inputTitle">Cấu Hình</label>
    <input type="text"
           class="form-control"
           id="inputTitle"
           name="configuration"
           value="{{ old('configuration') }}"
           >
           @error('configuration')
           <div class="alert alert-danger">{{ $message }}</div>
       @enderror
          </div>
  <div class="form-group">
    <label for="inputTitle">Giá Theo Cấu Hình</label>
    <input type="text"
           class="form-control"
           id="inputTitle"
           name="price_product"
           value="{{ old('price_product') }}"
           >
           @error('price_product')
           <div class="alert alert-danger">{{ $message }}</div>
       @enderror
</div>
<div class="form-group">
  <label for="inputTitle">Ảnh Sản Phẩm</label><br>
  {{-- <input type="file"
  class="form-control-file"
  id="inputFile"
  name="inputFile"
  value="{{ old('inputFile') }}"
  > --}}
  <input accept="image/*" type='file' id="imgInp" name="inputFile" /><br><br>
  <img type="hidden" width="90px" height="90px" id="blah" src="{{ old('inputFile') }}" alt="" /> <br>
  @error('inputFile')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>


           
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a class="btn btn-danger" href="{{ route('products') }}">Hủy</a>
        </form>
    </div>
</div>
<br>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        <script>
          jQuery(document).ready(function() {
              $('#blah').hide();
              jQuery('#imgInp').change(function() {
                  $('#blah').show();
                  const file = jQuery(this)[0].files;
                  if (file[0]) {
                      jQuery('#blah').attr('src', URL.createObjectURL(file[0]));
                  }
              });
          });
          
      </script>
</body>
</html>

@endsection