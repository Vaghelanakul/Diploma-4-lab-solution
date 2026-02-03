<!-- 5) Write a program to check whether the number is prime or not using recursion. (C) -->
<?php
function isPrime($n, $divisor = 2)
{
    if ($n < 2) {
        return false;
    }

    if ($divisor * $divisor > $n) {
        return true;
    }

    if ($n % $divisor == 0) {
        return false;
    }

    return isPrime($n, $divisor + 1);
}

$number = 29;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}

?>