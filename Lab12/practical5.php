<!-- 5) Write a program to check whether the number is prime or not using recursion. (C) -->
<?php
    function check($n, $i = null) {
        if ($n <= 1) {
            return 0; 
        }
        if ($i === null) {
            $i = $n - 1; 
        }
        if ($i == 1) {
            return 1; 
        }
        if ($n % $i == 0) {
            return 0; 
        }
        return check($n, $i - 1); 
    }
    
    
    $number = 29;
    if (check($number)) {
        echo "$number is a prime number.";
    } else {
        echo "$number is not a prime number.";
    }

?>


