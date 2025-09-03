<?php
$person = array(
    "name" => "user",
    "age" => 22,
    "email" => "abc@gmail.com",
    "contact" => "1234567891"
);
foreach($person as $key => $value){
    echo $key.":".$value."<br>";
}
?>