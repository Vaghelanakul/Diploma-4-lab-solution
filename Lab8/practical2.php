<?php

     //3 way to define array in php
    
    //1 with array() function

    $arr1=array("int_key"=>1,"string_key"=>"abc", "float_key"=>3.4,"bool_key"=> true);

    //2 with square brackets []

    $arr2=["key1" => 1,"key2"=>"abc", 3.4 => 3.4, true => false];

   //3 way 
    $arr3['key1'] = 1;
    $arr3['key2'] = "abc";
    $arr3['key3'] = 3.4;
    $arr3['key4'] = true;

    foreach($arr1 as $key =>$val){
        echo "Key:$key => Value:$val<br>";
    }
    echo "<hr>";
    echo "2nd array<br>";
    foreach($arr2 as $key =>$val){
        echo "Key:$key => Value:$val<br>";
    }
    echo "<hr>";
    foreach($arr3 as $key =>$val){
        echo "Key:$key => Value:$val<br>";
    }
    

    //with for loop
    
    echo "<hr>";
    $keys = array_keys($arr1); 
    for($i=0;$i<count($keys);$i++){
        $key = $keys[$i];
        echo "Key:$key => Value:$arr1[$key]<br>";
    }
    ?>