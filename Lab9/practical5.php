<!-- Write a program to sort given array in descending order without using inbuilt function. (C) -->

<?php
    $arr=[5,3,8,1,2,7];
    echo "Original array is: ";
    foreach($arr as $val)
        echo $val." ";
    echo "<br>";

    $n=count($arr);
    for($i=0;$i<$n-1;$i++){
        for($j=0;$j<$n-$i-1;$j++){
            if($arr[$j]<$arr[$j+1]){
                $temp=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$temp;
            }
        }
    }

    echo "Sorted array in descending order is: ";
    foreach($arr as $val)
        echo $val." ";
    echo "<br>";


?>