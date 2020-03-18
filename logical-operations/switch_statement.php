<?php
$a = 6;
switch ($a){
    case 0:
        echo "a equal 0 <br/>";
        break;
    case 1:
        echo "a equal 1 <br/>";
        break;
    case 2:
        echo "a equal 2 <br/>";
        break;
    case 3:
        echo "a equal 3 <br/>";
        break;
    default:
        echo "a is not 0, 1, 2, or 3<br/>";
        break;
} ?>

<?php
//chinese zodiac
$year = 1995;
switch (($year-4)%12) {
    case 0: $Zodiac = "Rat"; break;
    case 1: $Zodiac = "Ox"; break;
    case 2: $Zodiac = "Tiger"; break;
    case 3: $Zodiac = "Rabbit"; break;
    case 4: $Zodiac = "Dragon"; break;
    case 5: $Zodiac = "Snake"; break;
    case 6: $Zodiac = "Horse"; break;
    case 7: $Zodiac = "Goat"; break;
    case 8: $Zodiac = "Monkey"; break;
    case 9: $Zodiac = "Rooster"; break;
    case 10: $Zodiac = "Dog"; break;
    case 11: $Zodiac = "Pig"; break;
}
echo "{$year} is the year of the {$Zodiac}";
?><br/>

<?php
$user_type = "press";
switch ($user_type) {
    case "student":
        echo "Welcome!"; break;
    case "press":
    case "customer":
    case "admin":
        echo "Hello!"; break;
}
?>