<?php
session_start();

if (isset($_SESSION['user_id3'])){
    echo "user id: " . $_SESSION['user_id3'] . "<br/>";
    echo "you are logged in";
}
$user = 'user';
$password = $_GET['p'];
if ($user == 'user' && $password == 'regner') {
    $_SESSION['user_id3'] = rand(500,1000);
    header('Location: session_test1.php');
    exit();

}else {

    echo " You are not logged in.";
}
?>