<?php
/**
 * Created by PhpStorm.
 * User: ram
 * Date: 11/4/16
 * Time: 12:09 PM
 */
$ages = array(4,8,18,14,34,12);
echo "1:" . current($ages) . "<br/>";
next($ages);
echo "2: " . current($ages) . "<br/>";
next($ages);
next($ages);
echo "3: " . current($ages) . "<br/>";
prev($ages);
echo "4: " . current($ages) . "<br/>";
reset($ages);
echo "5: " . current($ages) . "<br/>";
end($ages);
echo "6: " . current($ages) . "<br/>";
?>
<br/>

<?php
reset($ages);
while($age = current($ages)){
    next($ages);
    echo $age . ", ";
}

?>
