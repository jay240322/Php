<html>
    <head>
        <title>
            third
        </title>
    </head>
    <body>
         <form method="POST">
            enter login id:
            <input type="text"name="login"><br>
            <input type="submit"name="submit">
         </form>
    </body>
</html>
<?php
session_start();
if(isset($_POST['login'])){
    $_SESSION['login'] = $_POST['login'];
    if(isset($_SESSION['login'])){
        $login = $_SESSION['login'];
        echo"the login id is:".$login;
    }
    else{
        echo"the login variable not found";
    }
}
?>