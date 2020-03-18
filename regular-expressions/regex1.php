<?php
$string = "This website is stupid. Your speaking style is idiotic. 
Your knowledge is crap. This is so stupid. you're an IDIOTIC . you're an idiot.";

$string = preg_replace('/stupid|idiot(?:ic)?|crap/i', "amazing", $string);
echo $string . "<br/>";

$string = "/admin/pages/edit?Page_id=4&sample=2";

$string = preg_replace('/\?.+/', "", $string);
echo $string."<br/>";

$string = 'gsg.gfgs.dfgfgf.jpg';
$string = preg_replace('/(.+?)(\-\d)?(\.[a-zA-Z]+)$/i', "$1-5$3" ,  $string);
echo $string;