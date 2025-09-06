<!-- create a one from which containing one input field (product id) and when user input and if user click (delete) button then it will delete the particular data record of that id  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
         Enter product_id:
         <input type="number"name="id">
         <br>
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
    $pro_id = $_POST['id'];

    $sql = "DELETE FROM PRODUCT WHERE pro_id = '$pro_id'";

    if($con->query($sql) == true){
        echo"record delete successfull";
    }
    else{
        echo"error".$con->error();
    }
}
?>