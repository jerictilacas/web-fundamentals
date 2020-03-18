<?php
session_start();


echo "Session: <br />";
echo "<pre>" . var_export($_SESSION, true) . "</pre>";
echo "Cookies: <br />";
echo "<pre>" . var_export($_COOKIE, true) . "</pre>";