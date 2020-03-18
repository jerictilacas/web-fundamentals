<?php include "includes/header.php";
// trying to submit
if (is_logged_in()) {
    redirect_to("dashboard.php");
}

if (isset($_POST["submit"])){
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (empty($username)){
        echo "Username can't be blank" ."<br/>";
    }

    if (empty($password)){
        echo "Password can't be blank"."<br/>";
    }

    if (!empty($username) && !empty ($password)){
        if ($username == "rams" && $password == "ramel"){
            set_log_in_user(rand(99,9999));
            redirect_to('dashboard.php');
        } else {
            $message = "Please try again";
        }
    }
}else{
    $message = "Please Login";
}
?>
<?php echo $message ;?>

<form action="login_form.php" method="post">
    <br/>
    Username: <input type="text" name="username" value="<?php echo e($_POST["username"]);?>"><br/>
    Password: <input type="password" name="password" value="<?php echo e($_POST["password"]);?>">
    <br/>
    <input class="btn btn-success"  type="submit" name="submit" value="submit"><br/>
</form>
