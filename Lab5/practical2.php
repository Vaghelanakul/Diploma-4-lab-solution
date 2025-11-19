<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Enter radius:<input type="number" name="number" placeholder="Enter a number">
        <br>
        <input type="submit" name="submit" value="Submit">

    </form>
    <?php
        if(isset($_GET["submit"])){
            $radius= $_GET['number'];
            $area = 3.14 * $radius * $radius;
            echo "Area of circle is $area";
        }

    ?>
</body>
</html>