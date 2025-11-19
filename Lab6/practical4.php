<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Enter number:<input type="number" name="num" placeholder="Enter number">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_GET['submit'])){
            $num = $_GET['num'];
            $sum=0;
            $product=1;
            for($i=1;$i<=$num;$i++){
                $sum+=$i;
                $product*=$i;
            }
            echo "Sum of first $num numbers is: $sum<br>";
            echo "Product of first $num numbers is: $product";
        }
    ?>
</body>
</html>