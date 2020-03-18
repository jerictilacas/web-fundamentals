<?php
function redirect_to($new){
    header("location:" . $new);
    exit;
}
$logged_in = $_GET["logged_in"];
if ($logged_in == "1"){
    redirect_to("includes.php");
}else {
    redirect_to("http://www.facebook.com");
}
?>

<html lang="en">
<body>

<body/>
<html/>
