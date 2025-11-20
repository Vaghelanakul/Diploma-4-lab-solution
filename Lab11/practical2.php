<?php

    function maxOutOfThree($a,$b,$c){
        if($a >= $b && $a >= $c){
            return $a;
        }
        elseif($b >= $a && $b >= $c){
            return $b;
        }
        else{
            return $c;
        }
    }

    $max = maxOutOfThree(10, 25, 15);
    echo "The maximum number is: " . $max;

?>