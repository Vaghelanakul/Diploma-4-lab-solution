<?php
   
    $value =10;
    echo "type of value is: ".gettype($value);
    echo "<br>";
    var_dump($value);

    settype($value, "string");
    echo "<br>";
    echo "type of value is: ".gettype($value);

    echo "<br>";
    var_dump($value);

    //when we use var_dump to for string it also shows length of string with value


?>