<?php
    

    //3 way to define array in php
    
    //1 with array() function

    $arr1=array(1,"abc",3.4,true);

    //2 with square brackets []

    $arr2=[1,"abc",3.4,true];

   //3 way 
   $arr3=[];
    $arr3[0] = 1;
    $arr3[1] = "abc";
    $arr3[2] = 3.4;
    $arr3[3] = true;

    //to print array 
    //1st way 
    print_r($arr1);
    echo "<br>";
    print_r($arr2);
    echo "<br>";
    print_r($arr3);
    echo "<br>";

    //2nd way 
    for($i=0;$i<count($arr1);$i++){
        echo $arr1[$i]."<br>";
    }

    //3rd way 

    foreach($arr1 as $val){
        echo $val."<br>";
    }



?>