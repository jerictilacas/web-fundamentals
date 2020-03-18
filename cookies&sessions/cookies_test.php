<?php
if (!isset($_COOKIE['access_id_2'])) {
    setcookie('access_id_2', uniqid('RAMEL_'), time() + (3600*24));
}

echo "<pre>" . var_export($_COOKIE, true) . "</pre>"; die();