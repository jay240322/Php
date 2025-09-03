<?php

$count = 0;
if(isset($_COOKIE['visited'])){
    $count = $_COOKIE['visited']+1;
    Setcookie('visited',$count,time()+(365*24*60*60),'1');
}
else{
    Setcookie('visited',1,time()+(365*24*60*60),'1');
    $count = 1;
    $_COOKIE['visited'] = $count;
}
echo"total visitor of the page:".$_COOKIE['visited'];
?>