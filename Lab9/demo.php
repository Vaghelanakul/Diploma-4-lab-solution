<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        enter size of an array:<input type="text" name="size"><br><br>
        enter value of array comma separated <input type="text" name="arr"><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $size = $_POST["size"];
        $arr = explode(",", $_POST["arr"]);
        if ($size != count(value: $arr)) {
            echo "size does't match";
        } else {
            print_r($arr);
        }
    }


    ?>

</body>

</html>