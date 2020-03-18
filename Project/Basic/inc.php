<?php

session_start();

define('BASE_PATH', __DIR__);

define('SESSION_LOG_IN_KEY', SESSION_LOG_IN_KEY);

function redirect_to($new_location)
{
    header("location: " . $new_location );
    exit;
}

function e($string)
{
    return htmlentities($string);
}

require_once "includes/security.php";
require_once "includes/database.php";