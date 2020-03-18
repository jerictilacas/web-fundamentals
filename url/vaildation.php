<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
$url = htmlentities( "'http://cms.local.com/jfd\"ffdffd'");

// Validate url
if (filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is not a valid URL");
} else {
    echo("$url is a valid URL");
}
?>
<br/>
<?php
$url = "https://www.w3s'chools.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
?>
</body>
</html>