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
            $count=0;
            for($i=1;$i<=$num;$i++){
                if($num%$i==0)
                    $count++;
            }
            if($count==2)
                echo "$num is a Prime Number";
            else
                echo "$num is not a Prime Number";
        }
    ?>
</body>
</html>