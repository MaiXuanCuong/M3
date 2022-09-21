<?php
include 'connect.php';
if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $sql = "DELETE FROM `customers` WHERE `id` = $id";
    try {
        $conn->exec($sql);
    } catch (Exception $e) {
        header('location:list.php');
    }
}
