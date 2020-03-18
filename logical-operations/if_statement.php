<?php
$a = 3;
$b = 4;
if ($a > $b) {
    echo "a is greater than b!";
} elseif($a < $b)
{
    echo "a is smaller than b!";
} else{
    echo "a is equal to b!";
}
?>
<br/>


<?php
$count = 1;

        while ($count <= 3) {
            if (($count == 1) || ($count == 2)) {
                echo "#{$count}<br/>";
            } else {
                echo " #" . $count;
            }
            $count ++;

            }




