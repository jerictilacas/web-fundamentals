<?php
$string = "Thanks for the help, @JohnDoe.
@johnDoe thanks for the help.
@quide the look.";
$string = preg_replace('/@(\w+)/i', "<a href=\"https://laracasts//$1\">@$1</a>", $string);
echo $string;
echo "<br/>";

$string = "<a href=\"https://google.com\">Google</a> <br/>google.com is the best search engine. ";
$string = preg_replace('/google(?=<)/i', "change", $string);
echo $string;
echo "<br/>";

$string = "<a href=\"https://google.com\">Google</a> <br/>google.com is the best search engine. ";
$string = preg_replace('/google(?!<)/i', "change", $string);
echo $string;