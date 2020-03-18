

<ul>
<li><a href="dashboard.php">Dashboard</a></li>
<!--    <li><a href="manage_user.php">Manage user</a></li>-->
<!--    <li><a href="manage_order.php">Manage Order</a></li>-->
</ul>

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
        <ul>
            <li><a><?php echo $subject["menu_name"];?></a></li>
        </ul>
        <?php
    }
    ?>
</ul>

<?php
//4. released return data
mysqli_free_result($result);
?>

<br />

<ul>
    <li><a href="logout.php">Logout</a></li>
</ul>