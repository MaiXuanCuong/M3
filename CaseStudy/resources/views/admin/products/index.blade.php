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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div  class="flex-center position-ref full-height">
    <div  class="content container">
        <div class="title m-b-md">
            <h1>Sản Phẩm</h1>
            <a class="btn btn-primary" href="{{ route('products.add') }}">Thêm Sản Phẩm</a>
            @if (Session::has('success'))
            <p class="text-success">
                <i class="fa fa-check" aria-hidden="true"></i>
                {{ Session::get('success') }}
            </p>
        @endif
        </div>
        <br>
        <table style="text-align: center ;background-color: white" class="table ">
            <tr>
                
                <th><i>STT</i></td>
                <th><i>Sản Phẩm</i></th>
                <th><i>Danh Mục</i></th>
                <th><i>Giá</i></th>
                <th><i>Ảnh</i></th>
                <th><i>Thao Tác</i></th>
                
            </tr>
        @foreach($items as $key => $item)
         
        <tr>

            <td>
                <i>{{ $key + 1 }} </i>  

            </td>
            <td>

                <i>{{ $item->name }} </i>  
            </td>
            <td>

                <i>{{ $item->category->name }}</i>   
            </td>
            <td>

                <i>{{ $item->price }}  </i> 
            </td>
            <td>

               <img width="130px" height="150px" src="{{ $item->image }}" alt="">    
            </td>
          
            <td>
                <form action="{{ route('products.destroy',$item->id) }}" method="post">
                    <i><a class="btn btn-primary" href="{{ route('products.edit',$item->id) }}">Sửa</a></i>
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Bạn Chắc Chắn Xóa {{ $item->name }}')" type="submit"><i>Xóa</i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
</div>
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
</body>
</html>

@endsection