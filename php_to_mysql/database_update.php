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

<?php
//often this are form values in $_post
$id = 9;
$menu_name = "delete me";
$position = 4;
$visible = 1;
//2. perform database query
$query = " update subjects set ";
$query .= " menu_name = '{$menu_name}', ";
$query .= " position = {$position}, ";
$query .= " visible = {$visible} ";
$query .= " where id = {$id} ";

$result = mysqli_query($dbconn, $query);
// test if there was a query error
if ($result) {
    //success
    //redirect_to
    echo "success!";
} else {
    //failure
    //$message = "subjects creation failed";
    echo $query . "<br/>";
    die("database query failed!". "<br/>" . mysqli_error($dbconn));
}
?>


<?php //5.  close the database connection
mysqli_close($dbconn);
?>
