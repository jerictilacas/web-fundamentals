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
//often this are form valuesin $_post
$id = 9;

//2. perform database query
$query = " delete from subjects";
$query .= " where id = {$id} ";
$query .= " limit 1 ";

$result = mysqli_query($dbconn, $query);
// test if there was a query error
if ($result && mysqli_affected_rows($dbconn) == 1) {
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
