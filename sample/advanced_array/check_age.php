<?php
require ("users_data.php");

// display under age if < 18
// display adult if >= 18
# Example:
// Nikol is underage

$id = $_GET['user'];
$person = $persons[$id];

if (($person['age']) >= 18){
    echo $person['name'] . " is adult!!";
}else {
    echo $person['name'] . " is underage!!";
}
