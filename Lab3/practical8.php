<?php

    $var1="10";
    $var2="20";
    echo "value before swapping: <br>";
    echo "var1=".$var1."<br>";
    echo "var2=".$var2."<br>";
    
    $var1=$var1+$var2; //30
    $var2=$var1-$var2; //10
    $var1=$var1-$var2; //20
     echo "value after swapping: <br>";
    echo "var1=".$var1."<br>";
    echo "var2=".$var2."<br>";


?>