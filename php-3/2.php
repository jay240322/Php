<!-- create an table which name is product and it's fields is id,name,price,qty -->
<?php
  $con = mysqli_connect("localhost","root","");
  if(!$con){
    die("connection failed".mysqli_connect_error());
  }
  $sql = "CREATE DATABASE IF NOT EXISTS mydb";
  if($con->query($sql) == true){
    echo"databse created successfully";
  }
  else{
    echo"error";
  }
$con -> select_db("mydb");
  $tbl = "CREATE TABLE PRODUCT(
     pro_id INT(6) PRIMARY KEY,
     pro_name VARCHAR(10) NOT NULL,
     PRO_PRICE DECIMAL(5) NOT NULL,
     QTY INT(3)
  )";
  if($con->query($tbl) == true){
    echo"table create successfully";
  }
  else{
    echo"error in created table";
  }
  $con->close();
?>