<?php
$message = "Listen, Centari. I'm not any of those guys, I'm a kid from trailer park. Okay Centauri?";

if(strpos($message, 'Centauri') != false)
{
echo "We found it" . "<br/>";
}

if(stristr($message, 'Centauri'))
{
echo "We found it" . "<br/>";
}

(preg_match_all('/Centau?ri/', $message, $match));
echo "<pre>" . var_export($match,true) . "</pre>" . "<br/>";

$comments = [
    'Always trust centauri.',
    'You almost got me killed.',
    'You\'re the man now, dog.',
    'Listen, centari. I\'m not any of those guys, I\'m a kid from the trailer park'
];
$comments = preg_grep('/Centau?ri/i', $comments);
echo "<pre>" . var_dump($comments) . "</pre>";