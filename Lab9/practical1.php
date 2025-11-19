<?php
    $arr=[1,2,3,4,5,6,7,8,9,10];
    echo "array is:";
    foreach($arr as $val)
        echo $val." ";
    echo "<br>";
    $even_count=0;
    $odd_count=0;
    foreach($arr as $val){
        if($val%2==0)
            $even_count++;
        else
            $odd_count++;
    }
    echo "Even count: $even_count<br>";
    echo "Odd count: $odd_count<br>";
?>