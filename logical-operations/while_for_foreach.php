
<?php // while loops

$count = 0;
$line = 1;
while ($count <= 30){
    echo $count . ", ";
    $count += $line;
    $line ++;
}
echo "<br/>";
echo "Count: {$count}";
?><br/>

<?php // for loops
for ($count = 0; $count <= 20; $count ++){
    if ($count % 2 == 0){
        echo "{$count} is even, <br/>";
    } else {
        echo "{$count} is odd! <br/>";
    }
}
?><br/>


<?php // foreach loops
$ages = array(4, 8, 10, 14, 9);
foreach ($ages as $age){
    echo "Age: {$age}<br/>";
}
?>

<?php // for each loops
$person = array (
    "first_name" => "Ronel",
    "last_name" => "Atillo",
    "adress" => "214 St. dffdfdf",
    "city" => "Cebu",
    "state" => "AT",
    "code" => "90232"
);
foreach ($person as $attribute => $data){
    $att = ucwords(str_replace("_", " ", $attribute));
    echo "{$att}: {$data}<br/>";
    // OR
    // echo ucwords(str_replace("_", " ", $attribute)). ": ". "{$data}<br/>";
}
?><br/>

<?php //foreach loops
$prices = array (
    "house" => 20000,
    "car" => 30000,
    "girl" => null,
);
foreach ($prices as $item => $price){
    echo "{$item}: ";
    if (is_int($price)){
        echo "$ {$price}";
    }else {
        echo "priceless";
    }
    echo "<br/>";
}
?>




