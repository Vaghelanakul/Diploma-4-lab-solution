<!-- Write a program to print numbers from N to 1 using recursion. (A) -->
<?php

    function seriesOfNumber($n){
        if($n<1){
            return;
        }
        echo $n." ";
        seriesOfNumber($n-1);

    }

    echo seriesOfNumber(10);



?>