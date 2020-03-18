<?php
require_once ("included_function.php");
require_once ("validation_function.php");

$errors = array();
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //echo "<pre>" . var_export($_POST, true) . "</pre>"; die();
    //FORM WAS SUBMITTED
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // VALIDATIONS
    $field_required = array(
        "username",
        "password"
    );
    foreach ($field_required as $field){
        $value = trim($_POST[$field]);
        if (has_presence($value) == false){
            $errors[$field] = ucfirst($field) . " can't be blank";
        }
    }

    $field_max_length = array("username" => 30, "password"  => 9);
    validate_max_lenght($field_max_length);

    if (empty($errors)){
        // TRY TO LOGIN
        if ($username == "ramel" && $password == "naruto"){
            //SUCCESSFUL LOGIN
            redirect_to("form_processing.php");
        }else {
            $message = ucfirst("username/Password do not match!");
        }
    }
}else{
    $username = "";
    $message = "please log in";
}

?>

<?php echo $message; ?>
<?php echo form_errors($errors);?>



<form action="form_with_validation.php" method="post">
    Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username);?>"/><br/>
    Password: <input type="password" name="password" value=""/><br/>
    <br/>
    <input type="submit" name="submit" value="submit"/>
</form>