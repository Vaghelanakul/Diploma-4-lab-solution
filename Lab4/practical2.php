<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        enter number :<input type="text" name="num" required>
        <input type="submit" value="submit" name="sb">
    </form>

    <?php
    if (isset($_GET['sb'])) {
        $n = $_GET['num'];
        if ($n % 2 == 0)
            echo "<h1 style='color:green;'>even</h1>";
        else
            echo "odd";
    }


    ?>
</body>

</html>