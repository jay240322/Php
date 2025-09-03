<?php
$num = array(
    array("A",11,21),
    array("B",12,22),
    array("C",13,23)
);
for($i=0;$i<count($num);$i++){
    echo"<b>row number $i </b><br>";
    for($j = 0;$j<3; $j++){
        echo $num[$i][$j]." ";
    }
}
?>