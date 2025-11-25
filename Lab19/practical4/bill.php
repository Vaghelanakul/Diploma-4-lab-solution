<?php


if (isset($_COOKIE['item1']) && isset($_COOKIE['item2']) && isset($_COOKIE['item3'])) {

    // $prices = ['item1' => 10, 'item2' => 20, 'item3' => 30];

    // $item1Qty = (int) $_COOKIE["item1"];
    // $item2Qty = (int) $_COOKIE["item2"];
    // $item3Qty = (int) $_COOKIE["item3"];

    // $totalAmount = 0;
    // echo "<h1>Detailed Bill</h1>";
    // foreach ($prices as $item => $price) {
    //     $quantityVar = ${$item . 'Qty'};
    //     $total = $price * $quantityVar;
    //     $totalAmount += $total;
    //     echo "<p>" . ucfirst($item) . " : Quantity = " . $quantityVar . ", Unit Price = $" . $price . ", Total = $" . $total . "</p>";
    // }


    $item1Qty = (int) $_COOKIE["item1"];
    $item2Qty = (int) $_COOKIE["item2"];
    $item3Qty = (int) $_COOKIE["item3"];

    $item1Price = 10;
    $item2Price = 20;
    $item3Price = 30;

    $total1 = $item1Price * $item1Qty;
    $total2 = $item2Price * $item2Qty;
    $total3 = $item3Price * $item3Qty;
    $totalAmount = $total1 + $total2 + $total3;
    echo "<h1>Detailed Bill</h1>";
    echo "Amount: &rupee;250";
    echo "<p>Item 1 : Quantity:" . $item1Qty . ", Unit Price:" . $item1Price . ", Total: " . $total1 . "</p>";
    echo "<p>Item 2 : Quantity:" . $item2Qty . ", Unit Price:" . $item2Price . ", Total: " . $total2 . "</p>";
    echo "<p>Item 3 : Quantity:" . $item3Qty . ", Unit Price:" . $item3Price . ", Total:" . $total3 . "</p>";
    echo "<h2>Total Amount Payable: " . $totalAmount . "</h2>";
} else {
    echo "<h2>No items purchased.</h2>";
}

?>