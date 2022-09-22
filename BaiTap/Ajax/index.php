<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> <!-- Latest compiled and minified CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Ajax</title>
</head>

<body>
    <!-- Cập Nhât -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <h4 class="modal-title" id="nameupdate">Cập nhật người dùng</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form">

                        <div class="form-group">
                            <label for="UpdateName">Tên</label>
                            <input type="text" class="form-control" id="UpdateName" placeholder="Nhập Tên">
                            <div id="nameError1" class="form-text text-danger error-msg"></div>

                        </div>
                        <div class="form-group">
                            <label for="UpdateNumber">Địa Chỉ</label>
                            <input type="text" class="form-control" id="UpdateAddress" placeholder="Nhập Địa Chỉ">
                            <div id="addressError1" class="form-text text-danger error-msg"></div>

                        </div>
                        <div class="form-group">
                            <label for="UpdateNumber">SĐT</label>
                            <input type="text" class="form-control" id="UpdatePhone" placeholder="Nhập SĐT">
                            <div id="phoneError1" class="form-text text-danger error-msg"></div>

                        </div>

                        <div class="form-group">
                            <label for="UpdateEmail">Email</label>
                            <input type="email" class="form-control" id="UpdateEmail" placeholder="Nhập Email">
                            <div id="emailError1" class="form-text text-danger error-msg"></div>

                        </div>
                        <div class="form-group">
                            <label for="UpdateAddress">Mật Khẩu</label>
                            <input type="text" class="form-control" id="UpdatePassword" placeholder="Nhập Mật Khẩu">
                            <div id="passwordError1" class="form-text text-danger error-msg"></div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Quay Lại</button>
                    <button type="button" class="btn btn-danger" onclick="update()">Cập Nhật</button>
                    <input type="hidden" id="show">
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Quay lại</button>
                    <button type="button" class="btn btn-danger">Xóa</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">Thêm mới người dùng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập Tên">
                            <div id="nameError" class="form-text text-danger error-msg"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Địa Chỉ</label>
                            <input type="text" class="form-control" id="address" placeholder="Nhập Địa Chỉ">
                            <div id="addressError" class="form-text text-danger error-msg"></div>
                        </div>
                        <div class="form-group">
                            <label for="number">SĐT</label>
                            <input type="text" class="form-control" id="phone" placeholder="Nhập SĐT">
                            <div id="phoneError" class="form-text text-danger error-msg"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Nhập Email">
                            <div id="emailError" class="form-text text-danger error-msg"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Mật Khẩu</label>
                            <input type="email" class="form-control" id="password" placeholder="Nhập Mật Khẩu">
                            <div id="passwordError" class="form-text text-danger error-msg"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Quay Lại</button>
                    <button type="button" class="btn btn-danger" onclick="add()">Thêm</button>

                </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <h3 class="text-center">Thực Hành Ajax</h3>
        <button type="button" class="btn btn-dark my-3" data-toggle="modal" data-target="#completeModal">
            Thêm Mới
        </button>
        <div id="list"></div>
    </div>

</body>
<script>
    $(document).ready(function() {
        List();
        $('#completeModal').on('shown.bs.modal', function() {
            $('.error-msg').empty()
        })
        $('#updateModal').on('shown.bs.modal', function() {
            $('.error-msg').empty()
        })
    });
    
    function List() {
        var list = "true";
        $.ajax({
            url: "list.php",
            type: "post",
            data: {
                ListShow: "list"
            },
            success: function(data, status) {
                $('#list').html(data);
            }
        })
    };

    function add() {
        var name = $('#name').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var address = $('#address').val();
        var password = $('#password').val();

        var haserror = false;

    if(name == ""){
        $('#nameError').html('Vui Lòng Nhập Tên');
        haserror = true;
    }
    if(phone == ""){
        $('#phoneError').html('Hãy Nhập số Điện Thoại');
        haserror = true;
    }
    if(email == ""){
        $('#emailError').html('Hãy Nhập email');
        haserror = true;
    }
    if(address == ""){
        $('#addressError').html('Hãy Nhập Địa Chỉ');
        haserror = true;
    }
    if(password == ""){
        $('#passwordError').html('Hãy Nhập Mật Khẩu');
        haserror = true;
    }
        if(haserror == true){
            $('#completeModal').keyup('shown.bs.modal', function() {
                if($('#name').val() != ""){
                    $('#nameError').empty()
                }
                if($('#phone').val() != ""){
                    $('#phoneError').empty()
                }
                if($('#email').val() != ""){
                    $('#emailError').empty()
                }
                if($('#address').val() != ""){
                    $('#addressError').empty()
                }
                if($('#password').val() != ""){
                    $('#passwordError').empty()
                }

        })
        List();
        }
        if(haserror === false){
            $.ajax({
                url: "add.php",
                type: "post",
                data: {
                    nameVal: name,
                    phoneVal: phone,
                    emailVal: email,
                    addressVal: address,
                    passwordVal: password,
                },
                success: function(data, status) {
                    console.log(status);
                    List();
                    $('#completeModal').modal('hide');
                }
            });
            alertify.success('Thêm mới thành công');
        }



    };

    function Delete(id) {


        $.ajax({
            url: "delete.php",
            type: "post",
            data: {
                delete: id,
            },
            success: function(data, status) {
                console.log(status);
                console.log(data);
                List();
            }
        });
        alertify.success('Xóa thành công');
    }

    function Show(id) {
      
        $('#show').val(id);
        var showid = id;
        $.ajax({
            url: "update.php",
            type: "get",
            dataType: 'json',
            data: {
                id: showid,
            },
            success: function(data, status) {
                
                $('#UpdateName').val(data.name);
                $('#UpdatePhone').val(data.phone);
                $('#UpdateEmail').val(data.email);
                $('#UpdateAddress').val(data.address);
                $('#UpdatePassword').val(data.password);
                $('#updateModal').modal('show');

            }
        });

    };

    function update() {
        var name = $('#UpdateName').val();
        var phone = $('#UpdatePhone').val();
        var email = $('#UpdateEmail').val();
        var address = $('#UpdateAddress').val();
        var password = $('#UpdatePassword').val();
        var id = $('#show').val();
        console.log(password);
        var haserror = false;
    if(name == ""){
        $('#nameError1').html('Vui Lòng Nhập Tên');
        haserror = true;
    }
    if(phone == ""){
        $('#phoneError1').html('Hãy Nhập số Điện Thoại');
        haserror = true;
    }
    if(email == ""){
        $('#emailError1').html('Hãy Nhập email');
        haserror = true;
    }
    if(address == ""){
        $('#addressError1').html('Hãy Nhập Địa Chỉ');
        haserror = true;
    }
    if(password == ""){
        $('#passwordError1').html('Hãy Nhập Mật Khẩu');
        haserror = true;
    }


if(haserror === false){
        $.ajax({
            url: "update.php",
            type: "post",
            data: {
                nameVal: name,
                phoneVal: phone,
                emailVal: email,
                addressVal: address,
                passwordVal: password,
                idVal: id,
            },
            success: function(data, status) {
                console.log(status);
                console.log(data);
                List();
                $('#updateModal').modal('hide');

            }
        });
        alertify.success('Cập nhật thành công');
    }}
</script>



<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

</html>
