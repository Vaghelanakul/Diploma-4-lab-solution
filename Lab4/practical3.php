<?php
    $num =25;
    if($num>0) 
        echo "Number is positive.";
    elseif($num<0)
        echo "Number is negative.";
    else
        echo "Number is zero.";

    //using ternary operator

    echo "<br>";

    $result = $num > 0 ? "$num is positive" : ($num<0 ? "$num is negative" : "$num is zero" );
    echo $result;
?>  