<?php
$string = "This website is stupid. Your speaking style is idiotic. 
        Your knowledge is crap. This is so stupid. you're an IDIOTIC . you're an idiot.";
$string = preg_replace('/stupid|idiot(?:ic)?|crap/i', "amazing", $string);
echo $string;