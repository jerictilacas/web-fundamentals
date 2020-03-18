<?php
/**
 * Created by PhpStorm.
 * User: ram
 * Date: 11/4/16
 * Time: 7:26 PM
 */
function total($val1, $val2){
    $add = $val1 + $val2;
    $subt = $val1 - $val2;
    return array($add, $subt);
}
$result = total(6, 3);
echo "add: " . $result[0] . "<br/>";
echo "subt: " . $result[1] . "<br/>";

list($add_result, $subt_result) = total(6, 3);
echo "subt: " . $add_result . "<br/>";
echo "add: " . $subt_result . "<br/>";
?>