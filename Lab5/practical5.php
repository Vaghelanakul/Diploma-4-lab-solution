<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Enter year:<input type="number" name="year" placeholder="Enter percentage">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_GET['submit'])){
            $year = $_GET['year'];

            if(($year%4==0 && $year%100!=0) || $year%400==0) 
                echo "$year is a Leap Year";
            else 
                echo "$year is not a Leap Year";
        }


    ?>
</body>
</html>