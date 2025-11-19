<?php
    $var1=10;
    $var2=20;
    if($var1> $var2) 
        echo "$var1 is grater than $var2";
    else 
        echo "$var2 is grater than $var1";

    //using ternary operator

    echo "<br>";
    echo $var1> $var2 ? "$var1 is grater than $var2" :"$var2 is grater than $var1";
?>