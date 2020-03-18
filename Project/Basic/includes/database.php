<?php

//1.  create database connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mysql";
$dbname = "widget_corp";
$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()){
    die("database connection failed: " .
        mysqli_connect_error() .
        "(" . mysqli_connect_errno() . ")"
    );
}
?>

