<?php
//*presence
$values = "0";
if (!isset($values) || empty($values)){
    echo "validation is failed.<br/>";
}
//string lenght
//minimum lenght
$values = "fd";
$min = 3;
if (strlen($values) < $min){
    echo "validation is failed.<br/>";
}
//max lenght
$max = 6;
if (strlen($values) > $max){
    echo "validation is failed.<br/>";
}
//type
$values = "0";
if (!isset($values)){
    echo "validation is failed.<br/>";
}
//inclusion in a set
$values = "5";
$set = array("1", "2", "3", "4");
if (in_array($values, $set)){
    echo "validation is failed.<br/>";
}
//uniqueness
//format
IF (preg_match("/php/","php is fun")){
    echo "a match was found.<br/>";
}else{
    echo "a match was not found<br/>";
}

$values = "atillo_ramel95@yahoo.com";
IF (!preg_match("/@/", $values)) {
    echo "validation has failed.";
}


?>