<?php

$age = 18;
if ($age > 18)
    echo "eligible<br>";
else
    echo "not eligible<br>";


$num = 18;
if ($num % 2 == 0)
    echo "even<br>";
else
    echo "odd<br>";

$n = 2;
if ($n < 0)
    echo "negative<br>";
else if ($n > 0)
    echo "positive<br>";
else
    echo "zero<br>";


$n1 = 25;
$n2 = 22;
$n3 = 26;

// if($n1>$n2 && $n1 >$n3){
//     echo "n1 max";
// }
// else if($n2>$n3){
//     echo "$n2 is mAax"
// }

// if ($n1 > $n2) {
//     if ($n1 > $n3)
//         echo "$n1 is max<br>";
//     else
//         echo "$n3 is max<br>";
// } else {
//     if ($n2 > $n3)
//         echo "$n2 is max<br>";
//     else
//         echo "$n3 is max<br>";

// }


$day = "wed";

// if ($day == 1)
//     echo "mon";
// else if ($day == 2)
//     echo "tue";
// else if ($day == 3)
//     continue;
// else if ($day == 4)
//     echo "thr";
// else if ($day == 5)
//     echo "fri";
// else if ($day == 6)
//     echo "sat";
// else if ($day == 7)
//     echo "sun";
// else
//     echo "invalid input";

switch ($day) {

    case "mon":
        echo "mon";
        break;
    case "tue":
        echo "tue";
        break;
    case "wed":
        echo "wed<br>";
        break;
    case 4:
        echo "tue";
        break;
    case 5:
        echo "tue";
        break;
    case 6:
        echo "tue";
        break;
    case 7:
        echo "tue";
        break;
    default:
        echo "invalid input";
        break;

}


$r = 200;

echo "area of circle is:" . 3.14 * 2 * 2 . "<br>";

$n1 = 10;
$n2 = 20;

$opt = 2;

switch ($opt) {
    case 1:
        echo $n1 + $n2 . "<br>";
        break;
    case 2:
        echo $n1 - $n2 . "<br>";
        break;
    case 3:
        echo $n1 * $n2 . "<br>";
        break;
    case 4:
        echo $n1 / $n2 . "<br>";
        break;
    default:
        echo "invalid input";
        break;
}


$a = "b";

if (
    $a == "A" || $a == "a" ||
    $a == "E" || $a == "e" ||
    $a == "I" || $a == "i" ||
    $a == "O" || $a == "o" ||
    $a == "U" || $a == "u"
)
    echo "vowel"



        ?>