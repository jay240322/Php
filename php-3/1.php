<!-- php script for creating the database and also create table  -->
<?php
  $con = mysqli_connect("localhost","root","");
  if(!$con){
    die("connection failed".mysqli_connect_error());
  }

$sql = "CREATE DATABASE IF NOT EXISTS DB1";
if($con->query($sql) == true)
{
    echo"databse created successfully with name DB-1";
}
else{
    echo"error in creating databse";
}
$con -> select_db("DB1");
$tbl = "CREATE TABLE MYTABLE (
        t_id INT(6) PRIMARY KEY,
        t_name VARCHAR(30) NOT NULL
)";

if($con->query($tbl) == true){
    echo"table create successfully";
}
else{
    echo"error in table";
}
$con->close();
?>