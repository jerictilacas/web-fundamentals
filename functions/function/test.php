<?php session_start();?>
<style>ol > li{
        font-size: 18px;
        font-weight: 300;
        color: #793862;
    }
    span {
        color: #000;
    }
</style>
<ol>
    <li>array_key_exists: <span>Checks if the given key or index exists in the array</span></li>
    <ul>
        <li><?php
            $search_array = array('first' => 1, 'second' => 4);
            if (array_key_exists('first', $search_array)) {
                echo "The 'first' element is in the array";
            }
            ?></li>
    </ul>
    <li>empty</li>
    <ul>
        <li><?php
            $var = 0;

            // Evaluates to true because $var is empty
            if (empty($var)) {
                echo '$var is either 0, empty, or not set at all' . "<br/>";
            }

            // Evaluates as true because $var is set
            if (isset($var)) {
                echo '$var is set even though it is empty';
            }
            ?>
        </li>
        <li>
            <?php
            $expected_array_got_string = 'somestring';
            var_dump(empty($expected_array_got_string['some_key']));
            var_dump(empty($expected_array_got_string[0]));
            var_dump(empty($expected_array_got_string['0']));
            var_dump(empty($expected_array_got_string[0.5]));
            var_dump(empty($expected_array_got_string['0.5']));
            var_dump(empty($expected_array_got_string['0 Mostel']));
            ?>
        </li>
    </ul>

    <li>count</li>
    <ul>
        <li><?php
            $array = array(
                "foo" => "bar" ,
                "bar" => "foo",
                100   => -100,
                -100  => 100,
            );
            echo count($array);
            ?>
        </li>
        <li><?php $array = array(
                "foo" => array(
                    "bar" => "foo",
                    100   => -100,
                    -100  => 100,
                    ),
                "bar" => "foo",
                100   => -100,
                -100  => 100,
            );
            echo count($array);
            ?>
        </li>
        <li><?php $b[0]  = 7;
            $b[5]  = 9;
            $b[10] = 11;
            echo $result = count($b); ?></li>
    </ul>

    <li>date</li>
    <ul>
        <li><?php echo date('Y-M-D-d')?></li>
        <li><?php echo date('y-m-d')?></li>
        <li><?php echo date('h:i:s')?></li>
    </ul>
    <li>end: <span>return the last element of an array</span></li>
    <ul>
        <li><?php $fruits = array('apple', 'banana', 'cranberry');
            echo end($fruits); // cranberry
            ?></li>
        <li><?php $a = array();
            $a[1] = 1;
            $a[0] = 0;
            echo end($a); ?>
        </li>
    </ul>
    <li>pos or current(): <span>they have the same function</span></li>
    <ul>
        <li><?php
            $countries = array("Brazil", "England", "Japan", "France");
            // Get the current position
            echo pos($countries) . "<br/>"; // print Brazil
            // Go to next position
            echo next($countries). "<br/>"; // print England
            // Current position
            echo current($countries). "<br/>"; //  print England
            // Previous position
            echo prev($countries). "<br/>"; // print Brazil
            // End Position
            echo end($countries) . "<br/>"; // print France
            // Current position
            echo pos($countries); // print France?>
        </li>
    </ul>
    <li>str_replace</li>
    <ul>
        <li><?php $str = "This is our chance of winning.";
            echo str_replace('our', 'your' , $str);
            ?></li>
    </ul>
    <li>define</li>
    <ul>
        <li><?php
            define("CONSTANT", "Hello world.");
            echo CONSTANT . "<br/>"; // outputs "Hello world."
            echo Constant . "<br/>"; // outputs "Constant" and issues a notice.

            define("GREETING", "Hello you.", true);
            echo GREETING . "<br/>"; // outputs "Hello you."
            echo Greeting; // outputs "Hello you."

            // Works as of PHP 7
//            define('ANIMALS', array(
//                'dog',
//                'cat',
//                'bird'
//            ));
//            echo ANIMALS[1]; // outputs "cat"

            ?></li>
    </ul>
    <li>htmlspecialchars: <span>similar to htmlentities</span></li>
    <ul>
        <li><?php
            $new = htmlspecialchars("<a href=\"test\">Test</a>", ENT_QUOTES);
            echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
            ?></li>
    </ul>
    <li>defined: <span>checks if constant exist, the same as <i>isset</i>  but <strong>defined</strong> only applies to constants.  </span></li>
    <ul>
        <li><?php
            /* Note the use of quotes, this is important.  This example is checking
             * if the string 'TEST' is the name of a constant named TEST */
            define('TEST', 'This is for testing');
            if (defined('TEST')) {
                echo TEST;
            }
            ?></li>
    </ul>
    <li>unset: <span>unset a given variable</span></li>
    <ul>
        <li><?php // out put bar
            function destroy_foo()
            {
                global $foo;
                unset($foo);
            }

            $foo = 'bar';
            destroy_foo();
            echo $foo;
            ?></li>
        <li><?php // use $GLOBALS  for to unset global variables
            function destroy_bar()
            {
                unset($GLOBALS['bar']);
            }
            $bar = 'foo';
            destroy_bar();
            echo $bar;
            ?></li>

    </ul>
    <li>strpos: <span>find the position of a given string in a string, string position start at 0, 1 </span></li>
    <ul>
        <li><?php $mystring = 'abc';
            $findme   = 'ab';
            $pos = strpos($mystring, $findme);
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
            if ($pos === false) {
                echo "The string '$findme' was not found in the string '$mystring'";
            } else {
                echo "The string '$findme' was found in the string '$mystring'";
                echo " and exists at position $pos";
            }
            ?></li>
        <li><?php // We can search for the character, ignoring anything before the offset
            $newstring = 'abcdef abcdef';
            $pos = strpos($newstring, 'a', 1); // $pos = 7, not 0
            echo $pos; ?></li>
    </ul>
    <li>strrpos: <span>Find the position of the <strong>last</strong> occurrence of a substring in a string</span></li>
    <ul>
        <li><?php $mystring = 'abc';
            $findme   = 'ab';
            $pos = strrpos($mystring, $findme);
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
            if ($pos === false) {
                echo "The string '$findme' was not found in the string '$mystring'";
            } else {
                echo "The string '$findme' was found in the string '$mystring'";
                echo " and exists at position $pos";
            }
            ?></li>
        <li><?php // We can search for the character, ignoring anything before the offset
            $newstring = 'abcdef abcdefa';
            $pos = strrpos($newstring, 'a'); // $pos = 7, not 0
            echo $pos; ?></li>
    </ul>
    <li>stripos: <span>unlike strpos, stripos is case-insensitive</span></li>
    <ul>
        <li><?php
            $findme    = 'a';
            $mystring1 = 'xyz';
            $mystring2 = 'ABC';

            $pos1 = stripos($mystring1, $findme);
            $pos2 = stripos($mystring2, $findme);

            // Nope, 'a' is certainly not in 'xyz'
            if ($pos1 === false) {
                echo "The string '$findme' was not found in the string '$mystring1'" . "<br/>";
            }

            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' is the 0th (first) character.
            if ($pos2 !== false) {
                echo "We found '$findme' in '$mystring2' at position $pos2";
            }
            ?></li>
    </ul>
    <li>print_r</li>
    <ul>
        <li><pre>
            <?php
            $a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
            print_r ($a);
            ?>
            </pre>
        </li>
    </ul>
    <li>preg_match: <span>performs regular expression match.... you can visit
            <a href="http://regexr.com/" target="_blank">regexr.com</a></span></li>
    <ul>
         <pre><li><?php
            preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
            var_export($matches);
            ?></li>
        <li><?php
            $subject = "abcdef";
            $pattern = '/^def/';
            preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE);
            var_dump($matches);
            ?></li>
        </pre>
    </ul>
    <li>preg_match_all: <span>Global regular expression match</span></li>
    <ul>
        <li><?php
            preg_match_all("|<[^>]+>(.*)</[^>]+>|U", "<b>example: </b><div align=\"left\">this is a test</div>",
                $out, PREG_PATTERN_ORDER);
            echo $out[0][0] . ", " . $out[0][1] ;
            echo $out[1][0] . ", " . $out[1][1] ;
            ?></li>
    </ul>
    <li>preg_replace: <span>Perform a regular expression search and replace</span></li>
    <ul>
        <li><?php
        $string = "This website is stupid. Your speaking style is idiotic. 
        Your knowledge is crap. This is so stupid. you're an IDIOTIC . you're an idiot.";
        $string = preg_replace('/stupid|idiot(?:ic)?|crap/i', "amazing", $string);
        echo $string; ?>
        </li>
    </ul>
    <li>header</li>
    <ul>
        <li>header('Location: http://www.example.com/');
            exit;</li>
        <li>header("HTTP/1.0 404 Not Found");</li>
    </ul>
    <li>in_array: <span>Checks if a value exists in an array</span></li>
    <ul>
        <li><?php
            $os = array("Mac", "NT", "Irix", "Linux");
            if (in_array("Irix", $os)) {
                echo "Got Irix";
            }
            if (in_array("mac", $os)) {
                echo "Got mac";
            }
            ?></li>
    </ul>
    <li>is_array: <span>finds whether a variable is an array</span></li>
    <ul>
        <li><?php
            $yes = array('this', 'is', 'an array');
            echo is_array($yes) ? 'Array' : 'not an Array';
            echo "<br/>"; ?>
            </li>
        <li>
            <?php
            $no = 'this is a string';
            echo is_array($no) ? 'Array' : 'not an Array';
            ?>
        </li>
    </ul>

    <li>implode: <span>Join array elements with a string</span></li>
    <ul>
        <li><?php

            $array = array('lastname', 'email', 'phone');
            $comma_separated = implode(" = ", $array);
            echo $comma_separated; // lastname=email=phone
            ?></li>
    </ul>
    <li>explode: <span> Split a string by string</span></li>
    <ul>
        <li><?php
            // Example 1
            $pizza  = "piece1=piece2=piece3=piece4=piece5=piece6";
            $pieces = explode("=", $pizza);
            echo $pieces[0] . "<br/>"; // piece1
            echo $pieces[1] . "<br/>"; // piece2

            // Example 2
            $data = "foo:*:1023:1000::/home/foo:/bin/sh";
            list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
            echo $user . "<br/>"; // foo
            echo $pass; // *

            ?></li>
        <li> <pre>
                <?php
                /*
                   A string that doesn't contain the delimiter will simply
                   return a one-length array of the original string.
                */
                $input1 = "hello";
                $input2 = "hello,there";
                $input3 = ',';
                var_dump( explode( ',', $input1 ) );
                var_dump( explode( ',', $input2 ) );
                var_dump( explode( ',', $input3 ) );

                ?>
            </pre>
            </li>
    </ul>
    <li>is_int: <span>Find whether the type of a variable is integer</span></li>
    <ul><pre>
             <li><?php
                 $values = array(23, "23", 23.5, "23.5", null, true, false);
                 foreach ($values as $value) {
                     echo "is_int(";
                     var_export($value);
                     echo ") = ";
                     var_dump(is_int($value));
                 }
                 ?>
        </li>
        </pre>
    </ul>
    <li>strlen: <span>get string length</span></li>
    <ul>
        <li><?php
            $str = 'abcdef';
            echo strlen($str) . "<br/>"; // 6

            $str = ' ab cd ';
            echo strlen($str); // 7
            ?></li>
    </ul>
    <li>basename: <span>returns the base name of the given path</span></li>
    <ul>
        <li><?php $path = "fundamentals/functions/test.php";
            $files = basename($path , '.php');// text.php
            echo $files;
            ?></li>
    </ul>
    <li>scandir: <span>List files and directories inside the specified path</span></li>
    <ul>
        <li><?php
            define('FUNC_PATH', __DIR__);// '/home/ram/Project/Fundamentals/functions'
            $files = scandir(FUNC_PATH);// text.php
            foreach ($files as $value){
                if ($value == "." || $value==".."){
                    continue;
                }else{
                    $value = basename($value, ".php");
                    echo $value . "<br/>";
                }
            }
            ?></li>
    </ul>
    <li>$_SESSION</li>
    <ul>
        <li>sessionViews: <?php
            if(isset($_SESSION['view'])){
                $_SESSION['view'] = $_SESSION['view'] + 1;
            }else{
                $_SESSION['view'] = 1;
            }
            echo $_SESSION['view'];
            ?></li>
    </ul>
    <li>array_merge</li>
    <ul>
        <li><pre><?php
                $array1 = array("color" => "red", 2, 4);
                $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
                $result = array_merge($array1, $array2);
                print_r($result);
                ?>
            </pre></li>
    </ul>
</ol>
