
 <?php  echo "hello world!<br/>"; //hello world expression ?>
 <?php  echo "hello"." world!"; ?><br/>
 <?php echo 1+1;?></br>

 <?php
 $var = 10;
 echo $var;
 echo "<br/>";
 $var = 100;
 echo $var;
 ?> <br/>

 <?php
 $target = "Hello";
 $forget = "World!";
 $phrase = $target ." ". $forget;
 echo $phrase;
 ?><br/>

 <?php
 echo "$phrase again <br/>";
 // best expression
 echo "{$phrase} again <br/>";
 ?> <br/>

 <?php
 $first = "The color black is black";
 $second = " but black is blacker than black.";
 $third = $first;
 $third .= $second;
 echo $third;
 ?><br/>

 Lowercase: <?php echo strtolower($third);?><br/>
 Uppercase: <?php echo strtoupper($third);?><br/>
 Lowercase first: <?php echo ucfirst($third);?><br/>
 Lowercase word: <?php echo ucwords($third);?><br/>
<br/>
 Length: <?php echo strlen($third);?><br/>
 trim: <?php echo "A" . trim(" B C D ") . "E";?><br/>
 find: <?php echo strstr($third, "black");?><br/>
 replace of string: <?php echo str_replace("color", "combination", $third);?><br/>
 <br/>
 repeat: <?php echo str_repeat($third, 2);?><br/>
 make substring: <?php echo substr($third, 4, 11);?><br/>
 find position: <?php echo strpos($third, "than");?><br/>
 find character: <?php echo strchr($third, "n");?><br/>
 <br/>

 <?php
 $num1 = 3;
 $num2 = 4;
 ?>
 Basic Math: <?php echo ((2+1+$num1)*$num2)/2-3;?><br/>
 <br/>
 absolute value:    <?php echo abs(0-300);?><br/>
 exponential:       <?php echo pow(2,8);?><br/>
 square root:       <?php echo sqrt(100);?><br/>
 modulo:            <?php echo fmod(20,7);?><br/>
 random:            <?php echo rand();?><br/>
 random (min,max):  <?php echo rand(1,4);?><br/>
 <br/>
 +=: <?php echo $num2 += 4;?><br/>
 -=: <?php echo $num2 -= 4;?><br/>
 *=: <?php echo $num2 *= 3;?><br/>
 /=: <?php echo $num2 /= 4;?><br/>
 <br/>
 increment: <?php $num2++; echo $num2;?><br/>
 decrement: <?php $num2--; echo $num2;?><br/>
 <br/>
 <?php echo $float = 3.144;?><br/>
 <?php echo $float +7;?><br/>
 <br/>
 round: <?php echo round($float, 2);?><br/>
 ceiling: <?php echo ceil($float);?><br/>
 floor: <?php echo floor($float);?><br/>
 <br/>

 <?php $integer = 3;?><br/>
 <?php echo "is {$integer} integer? " . is_int($integer);?><br/>
 <?php echo "is {$float} integer? " . is_int($float);?><br/>
 <br/>
 <?php echo "is {$integer} float? " . is_float($integer);?><br/>
 <?php echo "is {$float} float? " . is_float($float);?><br/>
 <br/>
 <?php echo "is {$integer} numeric? " . is_numeric($integer);?><br/>
 <?php echo "is {$float} numeric? " . is_numeric($float);?><br/>

 <h2>Arrays</h2>

 The output is  <?php
 $numbers = array(4,8,18,14,34,12);
 // or $numbers = array (0 => 4,1 => 8,2 => 18,3 => 14,4 => 34,5 => 12)
 ?>
 <?php echo $numbers [2]; ?>

 <?php $array = array(4,"dog","fish",array("x","y","z"));?><br/>
 The output is <?php echo $array[2]; ?><br/>
 The output is <?php echo $array[3][2]; ?><br/>
 <?php echo $array[4] = "mouse";?> <br/>
 <?php echo $array[5] = "rat";?>
 <pre>
     <?php print_r($array);?>
 </pre>

 <h2>Associative Arrays</h2>

 <?php $assoc = array ("first_name" => "Jolina", "last_name" => "Mylove");?>
 <?php echo $assoc ["first_name"];?><br/>
 <?php echo $assoc ["first_name"]." ".$assoc ["last_name"];?><br/>
 <br/>

 <h2>function Arrays</h2>

 count: <?php echo count($numbers);?><br/>
 min value: <?php echo min($numbers);?><br/>
 max value: <?php echo max($numbers);?>
 <pre>
     sort: <?php echo sort ($numbers); print_r($numbers);?><br/>
     reverse sort: <?php echo rsort ($numbers); print_r($numbers);?><br/>
 </pre>
implode: <?php echo $num_string = implode(", ", $numbers);?><br/>
 <pre>explode: <?php print_r(explode(", ",$num_string));?></pre>

 18 in array?: <?php echo in_array(18, $numbers); // returns true/false  or 1/0?><br/>
 19 in array?: <?php echo in_array(19, $numbers); // returns true/false  or 1/0?><br/>
 <br/>

 <?php
    $is_float = 3;
    if(is_float($is_float)){
     echo "it is a float";
 }
 else{
     echo "it is not a float";
 }
 ?> <br/>

 <?php
 define("MAX_WIDTH", 400);
 echo MAX_WIDTH;
 ?><br/>

<br/>
<?php
    $var1 = null;
    $var2 = '';
    $var3 = 0;
?>
    var1 = null? <?php echo is_null($var1); ?><br>
    var2 = null? <?php echo is_null($var2); ?><br>
    var3 = null? <?php echo is_null($var3); ?><br><br>

    var1 = set? <?php echo isset($var1); ?><br>
    var2 = set? <?php echo isset($var2); ?><br>
    var3 = set? <?php echo isset($var3); ?><br><br>

    var1 = empty? <?php echo empty($var1); ?><br>
    var2 = empty? <?php echo empty($var2); ?><br>
    var3 = empty? <?php echo empty($var3); ?><br>


 <h2>Type Juggling</h2>
 <?php $count = "3"; ?>
 type is : <?php echo gettype($count); ?><br>
 <?php $count += 5; ?>
 type is : <?php echo gettype($count); ?><br>
 <?php $cats = "I have" . $count . "cats."; ?>
 type is: <?php echo gettype($cats); ?>

 <h2>Type Casting</h2>
 <?php settype($count, "integer"); ?>
 count: <?php echo gettype($count); ?><br>

 <?php $count2 = (string) $count; ?>
 count: <?php echo gettype($count); ?><br>
 count: <?php echo gettype($count2); ?><br><br>

 <?php $test1 = 3; ?>
 <?php $test2 = 3; ?>
 <?php settype($test1, "string"); ?>
 <?php (string) $test2; ?>
 test1 = <?php echo gettype($test1); ?><br>
 test1 = <?php echo gettype($test2); ?><br>