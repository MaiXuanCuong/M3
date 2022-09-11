<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Danh sách khách hàng</h1>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <a href='show/2'>Xem</a> | <a href='edit/2'>Sửa</a> | 
            <form action="delete/2" method="post">
                    @method("delete")
                    @csrf
                <button type="submit">delete</button>
            </form>
                    {{-- tên của route --}}
        </td>
    </tr>


    </tbody>
</table>
</body>
</html>
