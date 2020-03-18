<?php
session_start();
echo "<pre>" . var_export($_SESSION, true) . "</pre>";
if (isset($_SESSION['user_id2'])) {
echo "User ID: " . $_SESSION['user_id2'];
echo "<br />";
echo "Yes, You are logged in.";
exit();
}

