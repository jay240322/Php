<?php
setcookie("username","welcome",time()+3600);

if(isset($_COOKIE["username"])){
    echo"the value of cookie is" .$_COOKIE["username"];
}
else{
    echo"the cookie is not set";
}
?>