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
$menu_name = "today's widget";
$position = 4;
$visible = 1;
//scape all string
$menu_name = mysqli_real_escape_string($dbconn, $menu_name);
//2. perform database query
$query = " insert into subjects (";
$query .= " menu_name, position, visible ";
$query .= ") values ( ";
$query .= " '{$menu_name}', $position, $visible ";
$query .= ") ";

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
