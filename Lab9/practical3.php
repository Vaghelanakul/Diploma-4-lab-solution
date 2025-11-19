<?php
    $arr=[5,6,7,8,9,10];
    echo "array is:";
    foreach($arr as $val)
        echo $val." ";
    echo "<br>";

    $sum=0;
    foreach($arr as $val){
        if($val%3==0 || $val%5==0)
            $sum += $val;
        
    }
    echo "Sum of array elements divisible by 3 or 5: $sum<br>";

?>