
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
            $num=$_GET['num'];
            for($i=1;$i<=$num;$i++){

                for($j=$i;$j<=$num;$j++){
                    echo "$j ";
                }
                echo "<br>";
            }
        }

        //153,370,371,407
    ?>
</body>
</html>