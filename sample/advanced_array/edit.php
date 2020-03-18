<?php

require ("users_data.php");

$id = $_GET['user'];

echo "You are editing: " . $persons[$id]['name'];