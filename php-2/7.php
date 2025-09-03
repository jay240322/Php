<?php
$num = array(10,20,30,10,40,50);

$unique = array_unique($num);
echo"the unique values are:<br>";

foreach($unique as $val){
    echo $val."<br>";
}
?>