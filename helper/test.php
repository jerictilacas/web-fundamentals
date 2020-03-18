<?php
session_start();

$user = 'user';
$password = $_GET['p'];
if ($user == 'user' && $password == 'regner') {
    $_SESSION['user_id2'] = rand(1,500);

    header('Location: test2.php');
    exit();

}

echo " You are not logged in.";