<?php
session_start();
?>
<?php
$_SESSION["first_name"] = "ramel";
$name = $_SESSION["first_name"];
echo $name;
?>
<br/>
<?php
    if(isset($_SESSION['view'])){
        $_SESSION['view'] = $_SESSION['view'] + 1;
    }else{
        $_SESSION['view'] = 1;
    }

    echo $_SESSION['view'];
?>


