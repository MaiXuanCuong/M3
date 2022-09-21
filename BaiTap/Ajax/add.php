<?php
include 'connect.php';

extract($_POST);
if(isset($_POST['nameVal']) && $_POST['phoneVal'] && $_POST['emailVal'] && $_POST['addressVal'] && $_POST['passwordVal']){

    $sql = "INSERT INTO `customers` (`name`, `address`, `phone`, `email`,`password`) VALUES
    ('$nameVal', '$addressVal', '$phoneVal', '$emailVal', '$passwordVal')";

    $conn->query($sql);
}
