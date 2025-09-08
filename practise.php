<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        ener string:
        <input type="text"name="text">
        <br>
        <input type="submit"name="click">
    </form>
</body>
</html>
<?php
if($_POST){
    $str = $_POST['text'];
    $reverse = strrev($str);

    if($str == $reverse){
        echo "$str is palindrome";
    }
    else{
        echo"$str is not palindrome:";
    }
}
?>