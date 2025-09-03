<?php
Session_start();
if(isset($_POST['submit'])){
    $_SESSION['login'] = $_POST['login'];
    if(isset($_SESSION['login'])){
        $login = $_SESSION['login'];
        echo"the login id is:".$login;
    }
    else{
        echo"thel login is is not found";   
    }
}
?>