<?php
include 'connect.php';
if(isset($_POST['ListShow'])){
    $table='<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Stt</th>
        <th scope="col">Tên</th>
        <th scope="col">Địa Chỉ</th>
        <th scope="col">Số Điện Thoại</th>
        <th scope="col">Email</th>
        <th scope="col">Chức Năng</th>
      </tr>
    </thead>';
    $sql = "SELECT * FROM customers ";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $rows = $stmt->fetchAll();
    foreach ($rows as $key => $row){

      $table.='<tr>
      <th scope="row">'.$key.'</th>
      <td>'.$row->name.'</td>
      <td>'.$row->address.'</td>
      <td>'.$row->phone.'</td>
      <td>'.$row->email.'</td>
      <td>
          <button class="btn btn-dark" class="show" type="button" onclick="Show('.$row->id.')">Sửa</button>
          <button class="btn btn-danger" type="button" onclick="Delete('.$row->id.')">Xóa</button>
      </td>
      </tr>';
    }
    }
    $table.='</table>';
    echo $table;

?>