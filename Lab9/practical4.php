<!-- Write a program to accept n numbers in an array. Now, enter a number and search whether the number is present or not in
the list of array elements by using linear search. (B) -->
<?php
    $arr=[5,6,7,8,9,10];
    $num=7;
    $found=false;
    echo "array is:";
    foreach($arr as $val)
        echo $val." ";
    echo "<br>";
    foreach($arr as $val){
        if($val==$num){
            $found=true;
            break;
        }
    }
    if($found)
        echo "Number $num is found in the array.<br>";
    else
        echo "Number $num is not found in the array.<br>";

?>