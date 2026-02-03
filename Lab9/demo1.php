<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        enter size of an array:<input type="text" name="size">
        <input type="submit" value="generate" name="gen">
    </form>
    <?php
    if (isset($_GET['gen'])) {
        $size = (int) $_GET["size"];
        echo " <form method='post'>";
        for ($i = 0; $i < $size; $i++) {
            // <input type='text' name='arr[]' require
        }


        echo "</form>";


    }

    ?>
</body>

</html>