<?php
$sub = array("php","html","css","js");

$search = "php";
$count = 0;

if(in_array($search,$sub)){
    echo"$search found in the array";
    $count ++;
}
else{
    echo"$search not found in the array:";
}
?>