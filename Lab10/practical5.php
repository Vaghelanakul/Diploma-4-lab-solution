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
        function fibonacci($num) {
            $x=0;
            $y=1;
            echo "Fibonacci series of $num numbers:<br>";
            for($i=1;$i<=$num;$i++){
                echo $x."<br>";
                $z=$x+$y;
                $x=$y;
                $y=$z;
            }
        }
        if(isset($_GET['submit'])){
            $num=$_GET['num'];
            fibonacci($num);
        }
    ?>
</body>
</html>

            