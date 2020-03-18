<?php
$name = "test";
$value = "hello";
$expire = time() + (7*24*60*60);
setcookie($name, $value, $expire);

//UNSETTING COOKIES
// EITHER IN 3
//1. setcookie($name)
//2. setcookie($name, null)
//3. setcookie($name, $value, time()-3600)
?>

<?php
    $test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
    echo $test;
?>

