<!-- 4) Write a program to generate Fibonacci series of N number using recursion. (B) -->

<?php
    // function fibonacciSeries($n, $a=0, $b=1, $count=0){
    //     if($count >= $n){
    //         return;
    //     }
    //     echo $a." ";
    //     fibonacciSeries($n, $b, $a+$b, $count+1);
    // }

    // fibonacciSeries(5);

    echo "<br>";
    //another way
    function fibonacciSeries($n){
        if($n==0) 
            return 0;
        elseif($n==1)
            return 1;
        return fibonacciSeries($n-1) +fibonacciSeries($n-2);
    }

    for($i=0;$i<5;$i++){
        echo fibonacciSeries($i)." ";
    }

?>