<pre>
    <?php
    print_r($_POST);
    ?>
</pre>

<?php
if (isset($_POST["submit"])){
    echo "form was submitted.";

    if (isset($_POST["username"])) {
        $username = $_POST["username"];
    }else{
        $username = "";
    }

    if (isset($_POST["password"])) {
        $password = $_POST["password"];
    }else {
        $password = "";
    }

    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["passwod"]) ? $_POST["password"] : "";
}
else {
    $username = "";
    $password = "";
}
?>
<?php echo "{$username}: {$password}";?>
