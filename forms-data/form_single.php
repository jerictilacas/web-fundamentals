<?php
require_once ("included_function.php");
if (isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "ramel" && $password == "sdsdsd"){
        redirect_to("form_processing.php");
    }else {
        echo hello($username). "!" . "<br/>";
        $message = ucwords("there were some error.");

    }
}else{
    $username = "";
    $message = "please log in";
}
?>

<?php echo $message; ?>

<form action="form_single.php" method="post">
    Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username)?>"/><br/>
    Password: <input type="password" name="password" value=""/><br/>
    <br/>
    <input type="submit" name="submit" value="submit"/>
</form>