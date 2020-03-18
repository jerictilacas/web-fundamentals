<?php

for ($count = 0; $count <= 10; $count++){
    if ($count % 2 == 0) {
        continue;
    }
    echo $count . ",  ";
}

?><br/>

<?php
for ($a = 0; $a <= 5; $a ++){
    if ($a % 2 == 0){ continue;}
    for ($b = 0; $b <= 5; $b++){
        if ($b == 3){ continue;}
        echo $a . "-" . $b . "<br/>";
    }
}
?>

