<?php

    $var1=10;
    $var2=20;
    $var3=15;


    if($var1>=$var2 && $var1>=$var3)
        echo "$var1 is greatest";
    elseif($var2>=$var1 && $var2>=$var3)   
        echo "$var2 is greatest";
    else
        echo "$var3 is greatest";

    //using nested if
    echo "<br>";
    if($var1>=$var2){
        if($var1>=$var3)
            echo "$var1 is greatest";
        else
            echo "$var3 is greatest";
    }
    else{
        if($var2>=$var3)   
            echo "$var2 is greatest";
        else
            echo "$var3 is greatest";
    }


    //using ternary operator
    echo "<br>";

    $result = ($var1>=$var2) 
    ?   ($var1>=$var3 ? "$var1 is greatest" : "$var3 is greatest")
    :   ($var2>=$var3 ? "$var2 is greatest" : "$var3 is greatest");
    echo $result;
    
?>