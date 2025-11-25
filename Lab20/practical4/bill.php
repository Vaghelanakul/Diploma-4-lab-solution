<?php
session_start();

if (isset($_SESSION['item1']) && isset($_SESSION['item2']) && isset($_SESSION['item3'])) {
    $item1 = $_SESSION['item1'];
    $item2 = $_SESSION['item2'];
    $item3 = $_SESSION['item3'];

    $price1 = 10;
    $price2 = 20;
    $price3 = 30;

    $total1 = $item1 * $price1;
    $total2 = $item2 * $price2;
    $total3 = $item3 * $price3;

    $grandTotal = $total1 + $total2 + $total3;
} else {
    echo "No items purchased.";
    exit;
}



?>