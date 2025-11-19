<!-- Write a program to create calculator using all four types of UDF. (B -->
<?php

    // no return -no args
    function add()
    {
        $a=10;
        $b=20;  
        echo $a+$b;
    }   

    // no return -with args
    function subtract($a,$b)
    {
        echo $a-$b;
    }   

    // with return -no  args
    function multiply()
    {
        $a=10;
        $b=20;
        return $a*$b;
    }   

    // with return -with args
    function divide($a,$b)
    {
        return $a/$b;
    }   

    $num1=20;
    $num2=10;

    echo "Numbers are: $num1 and $num2<br>";
    echo "Addition: ";
    add();
    echo "<br>Subtraction: ";
    subtract($num1,$num2);
    echo "<br>Multiplication: ";
    $mul=multiply();
    echo $mul;
    echo "<br>Division: ";
    $div=divide($num1,$num2);
    echo $div;
    


?>