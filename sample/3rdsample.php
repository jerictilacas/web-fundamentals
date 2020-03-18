<?php
$first = 0;
$second = 1;

//1-1 = black & red
//0-0 = no color
//1-0 = black only
//0-1 = red only

$messages = array();

if ($first == 1 && $second == 1){
    $messages[] = "the color is both black and red";
} else if ($first == 0 && $second == 0){
    $messages[] =  "there is no color";
}
if ($first == 1 && $second == 0){
    $messages[] =  "the color is black only";
}
if ($first == 0 && $second == 1){
    $messages[] = "the color is red only";
}

foreach ($messages as $m) {
    echo $m . "<br />";
}

?>


