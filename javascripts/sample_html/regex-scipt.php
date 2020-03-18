<?php

// EXAMPLE

//   var myRE =  /^hello/;           (At the start)
//                      /hello$/;    (at the end)
//             /^hel+o/;             (once or more)
//                      /^hel*o/;    (zero or more)
//             /^hel?o/;             (zero or one)

?>
<script>
    var myRE = /hello/;
    var string = "Does  this sentence has hello in word?";
    if (myRE.test(string)){
        alert("Yes");
    }
</script>

