<!-- 4) Create a webpage showing multiple items with add to cart and purchase functionality and on click of purchase it will
redirect user to bill page that will show the detailed bill using COOKIES. (C) -->

//with only cookies

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Shop Page</h1>
    <form method="post">
        <label for="item1">Item 1 :10 </label>
        <input type="number" id="item1" name="item1" value="1" min="1"><br><br>

        <label for="item2">Item 2 :20 </label>
        <input type="number" id="item2" name="item2" value="1" min="1"><br><br>

        <label for="item3">Item 3 :30 </label>
        <input type="number" id="item3" name="item3" value="1" min="1"><br><br>

        <input type="submit" value="Purchase" name="submit">
    </form>


    <?php
    if (isset($_POST['submit'])) {
        $item1 = isset($_POST['item1']) ? (int) $_POST['item1'] : 1;
        $item2 = isset($_POST['item2']) ? (int) $_POST['item2'] : 1;
        $item3 = isset($_POST['item3']) ? (int) $_POST['item3'] : 1;

        setcookie('item1', $item1, time() + 3600);
        setcookie('item2', $item2, time() + 3600);
        setcookie('item3', $item3, time() + 3600);
        header('Location: bill.php');

    }

    ?>
</body>

</html>