<?php
    $arr=[5,6,7,8,9,10];
    echo "array is:";
    foreach($arr as $val)
        echo $val." ";
    echo "<br>";
    // $sum = array_sum($arr);
    $sum=0;
    foreach($arr as $val){
        $sum += $val;
    }
    
    echo "Sum of array elements: $sum<br>";
    $avg = $sum/count($arr);
    echo "Average of array elements: $avg<br>";


?>