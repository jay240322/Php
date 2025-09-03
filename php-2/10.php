<?php

$sub = array("php","html","css","java");

echo "using forloop :<br>";
for($i=0;$i<count($sub);$i++){
    echo $sub[$i]."<br>";
}
echo"<br>";
echo"using foreach loop";
foreach($sub as $value){
    echo $value."<br>";
}