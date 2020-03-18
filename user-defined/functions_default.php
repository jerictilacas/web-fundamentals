<?php
/**
 * Created by PhpStorm.
 * User: ram
 * Date: 11/4/16
 * Time: 8:10 PM
 */
function color($room = "office", $color = "blue"){
    return "the color of the {$room} is {$color}<br/>";
}
echo color();
echo color("bedroom");
echo color("bedroom", "red");

?>

