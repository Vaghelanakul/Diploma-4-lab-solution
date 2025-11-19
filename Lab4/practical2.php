<?php

    $num=10;
    if($num%2==0) 
        echo "$num is even number.";
    else 
        echo "$num is odd number.";

    //using ternary operator

    echo "<br>";

    echo ($num%2==0) ? "$num is even" : "$num is odd";
    

?>