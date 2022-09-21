<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
$sql = "SELECT * FROM customers WHERE id ='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$row = $stmt->fetch();
$reponse = $row;
echo json_encode($reponse);
};
  


extract($_POST);
if (isset($_POST['nameVal']) && $_POST['phoneVal'] && $_POST['emailVal'] && $_POST['addressVal']  && $_POST['idVal'] && $_POST['passwordVal']) {

    $sql1 = "UPDATE `customers` SET `name` = '$nameVal', `phone` = '$phoneVal', `email` = '$emailVal', `address` = '$addressVal', `password` = '$passwordVal'
     WHERE `id` = $idVal;";
    
   $conn->query($sql1);
   
}
?>


