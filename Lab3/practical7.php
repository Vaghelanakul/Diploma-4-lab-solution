<?php
$var1 = "10";
$var2 = "20";
echo "value before swapping: <br>";
echo "var1=" . $var1 . "<br>";
echo "var2=" . $var2 . "<br>";

$temp = $var1;
$var1 = $var2;
$var2 = $temp;
echo "value after swapping: <br>";
echo "var1=" . $var1 . "<br>";
echo "var2=" . $var2 . "<br>";

?>