<?php
require_once ("validation_function.php");
$errors = array();

$username = trim("");

if (!has_presence($username)){
     $errors["username"] = "Username can't be blank";
}
?>
<?php echo form_errors($errors); ?>
