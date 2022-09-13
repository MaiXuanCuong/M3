<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Tasks</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Tasks List
        </div>
        @if(!isset($tasks))
        <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
    @else
        <table class="col-xl-12 table-bordered">
            <thead>
            <tr>
                <th class="col-1">#</th>
                <th class="col-2">Task title</th>
                <th class="col-2">Content</th>
                <th class="col-2">Created</th>
                <th class="col-2">Due Date</th>
                <th class="col-2">img</th>
                <th class="col-2">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(count($tasks) == 0)
                <tr>
                    <td colspan="5"><h5 class="text-primary">Hiện tại chưa có task nào được tạo!</h5></td>
                </tr>
            @else
                @foreach($tasks as $key =>$task)
                    <tr>
                        <td scope="row">{{ ++$key }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td>{{ $task->due_date }}</td>
                        <td style="height: 150px">
                            <img src="{{ asset('storage/images/'.$task->image) }}" alt="" style="width: 150px">
                        </td>
                        <td>
                            <form action="{{ route('destroy', $task->id) }}" method='post'>
                            @csrf
                            @method('delete')
                            <button type="submit">Xóa</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            @endif
            <div class="links">
                <a href="{{ route('create') }}">Add new task</a>
                <a href="{{ route('index') }}">Tasks list</a>
            </div>
            </tbody>
        </table>
    @endif
    

      

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