<?php
/**
 * Created by PhpStorm.
 * User: ram
 * Date: 11/4/16
 * Time: 8:02 PM
 */

$bar = "outside"; //global scope
function foo(){
    global $bar;
    if (isset($bar)){
        echo "foo:" . $bar . "<br/>";
    }
    $bar = "inside"; //local scope
}
echo "1: " . $bar . "<br/>";
foo();
echo "2: " . $bar . "<br/>";