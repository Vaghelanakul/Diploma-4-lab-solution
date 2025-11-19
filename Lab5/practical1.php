<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Enter a number between 1 to 7:<input type="number" name="number" placeholder="Enter a number">
        <br>
        <input type="submit" name="submit" value="Submit">

    </form>
    <?php
        if(isset($_GET['submit'])){
            $num = $_GET['number'];
            switch($num){
                case 1: echo "Monday"; break;
                case 2: echo "Tuesday"; break;
                case 3: echo "Wednesday"; break;   
                case 4: echo "Thursday"; break;
                case 5: echo "Friday"; break;
                case 6: echo "Saturday"; break;
                case 7: echo "Sunday"; break;
                default: echo "Invalid input"; break;

            }
        }


    ?>  
    
</body>
</html>