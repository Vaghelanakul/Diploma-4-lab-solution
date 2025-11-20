<!-- Write a program that calculates area of circle, triangle and square using user defined function. (A) -->

<?php
    function areaOfCircle($radius) {
        return 3.14 * $radius* $radius;
    }
    function areaOfTriangle($base, $height) {
        return 0.5 * $base * $height;
    }
    function areaOfSquare($side) {
        return $side * $side;
    }

    $CircleArea = areaOfCircle(5);
    $TriangleArea = areaOfTriangle(4, 6);
    $SquareArea = areaOfSquare(4);

    echo "Area of Circle: " . $CircleArea . "<br>";
    echo "Area of Triangle: " . $TriangleArea . "<br>";
    echo "Area of Square: " . $SquareArea . "<br>";


?>  