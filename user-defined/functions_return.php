<?php
/**
 * Created by PhpStorm.
 * User: ram
 * Date: 11/4/16
 * Time: 6:12 PM
 */
function add($val1, $val2){
    return $val1 + $val2;

}
$result1 = add(2,4);
$result2 = add(3, $result1);
echo $result2;

?><br/>
<?php
function chinese_zodiac($years)
{
    switch (($years - 4) % 12) {
        case 0: return "Rat";
        case 1: return "Ox";
        case 2: return "Tiger";
        case 3: return "Rabbit";
        case 4: return "Dragon";
        case 5: return "Snake";
        case 6: return "Horse";
        case 7: return "Goat";
        case 8: return "Monkey";
        case 9: return "Rooster";
        case 10: return "Dog";
        case 11: return "Pig";
    }
}
$zodiac = chinese_zodiac(1995);
echo "1995 is the year of the {$zodiac}.<br/>";

$zodiac = chinese_zodiac(2034);
echo "2034 is the year of the {$zodiac}.<br/>";

echo "2013 is the year of the " . chinese_zodiac(2013) . "<br/>";

?><br/>
