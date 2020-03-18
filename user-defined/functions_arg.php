<?php
function add($nam1, $nam2, $nam3){
    echo ($nam1 + $nam2)/$nam3;
    echo "<br/>";
}
add(10, 20, 2);
add(5, 2, 2);
?><br/>

<?php
function get_modulo($nam1, $nam2){
    echo $nam1 % $nam2;
    echo "<br/>";

}
get_modulo(20, 7);
get_modulo(5, 2);
?>