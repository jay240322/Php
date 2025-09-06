<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        enter id:
        <input type="number"name="id">
        enter name:
        <input type="text"name="name">
        enter price:
        <input type="number"name="price">
        enter quantity:
        <input type="number"name="quantity"><br>
        <input type="submit"name="submit">
    </form>
</body>
</html>
<?php
 $con = mysqli_connect("localhost","root","","mydb");

 if(!$con){
    die("connection failed".mysqli_connect_error());
 }
 if($_POST){
    $proid = $_POST['id'];
    $proname = $_POST['name'];
    $proprice = $_POST['price'];
    $proqty = $_POST['quantity'];
 }
 $sql = "INSERT INTO `product` (`pro_id`, `pro_name`, `PRO_PRICE`, `QTY`) VALUES ('$proid', '$proname', '$proprice', '$proqty')";
 if($con->query($sql) == true){
    echo"<script>alert("newdata inserted")</script>";
 }
 else{
    echo"error";
 }
 mysqli_close($con);
?>