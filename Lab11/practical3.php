<?php

    function isPrime($num) {
        if ($num <= 1) {
            return false;
        }
        $count=0;
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $count++;
            }
        }
        if($count==2){
            return true;
        }
        else{
            return false;
        }
    }
    $number = 28;
    if (isPrime($number)) {
        echo "1";
    } else {
        echo "0";
    }
?>