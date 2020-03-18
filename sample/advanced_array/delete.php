<?php

require ("users_data.php");

$id = $_GET['user'];

echo "You are deleting: " . $persons[$id]['name'];