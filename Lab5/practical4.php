<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Enter percentage:<input type="number" name="percentage" placeholder="Enter percentage">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
        <?php
        if(isset($_GET['submit'])){
            $percentage=$_GET['percentage'];
            if($percentage<40) 
                echo "Fail";
            elseif($percentage>=40 && $percentage<=50)
                echo "Pass Class";
            elseif($percentage>50 && $percentage<=60)
                echo "Second Class";
            elseif($percentage>60 && $percentage<=70)
                echo "First Class";
            elseif($percentage>70)
                echo "Distinction";
            
        }

    ?>
</html>