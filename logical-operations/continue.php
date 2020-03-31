<?php

for ($count = 0; $count <= 10; $count++){
    if ($count % 2 == 0) {
        continue;
    }
    echo $count . ",  ";
}

?><br/>

<?php // loop inside a loop with continue
for ($a = 0; $a <= 5; $a ++)
{
    if ($a % 2 == 0)
    { continue;}
    for ($b = 0; $b <= 5; $b++)
    {
        if ($b == 3)
        { continue;}
        echo $a . "-" . $b . "<br/>";
    }
}
?>


<?php

for ($i=0; $i <= 10; $i++)
{
    if ($i % 2 == 0)
    {
        echo $i . " is an even number" . "<br>";
    }
    else
    {
        echo $i . " is an odd number" . "<br>";
    }
}
?>


