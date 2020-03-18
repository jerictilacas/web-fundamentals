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
//2. perform database query
$query = " select * ";
$query .= " from subjects ";
$query .= " where visible = 1 ";
$result = mysqli_query($dbconn, $query);
// test if there was a query error
if (!$result) {
    echo $query . "<br/>";
    die("database query failed!". "<br/>" . mysqli_error($dbconn));
}
?>

<ul>
<?php //body
//3. use return data if (any)
while ($subject = mysqli_fetch_assoc($result)){
    //out data for each row
    ?>
    <li><?php echo $subject["menu_name"] . " ({$subject['id']})";?></li>
<?php
}
?>
</ul>

<?php
//4. released return data
mysqli_free_result($result);
?>

<?php //5.  close the database connection
mysqli_close($dbconn);
?>
