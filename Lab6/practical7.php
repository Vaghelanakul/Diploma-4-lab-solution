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
            $rem=0;
            $temp=$num;
            $rev=0;
            while ($num>0 ){
                $rem=$num%10;
                $rev=$rev*10+$rem;
                $num=(int)($num/10);
            }
            if($temp==$rev)
                echo "$temp is a Palindrome Number";
            else
                echo "$temp is not a Palindrome Number";
        }
    ?>
</body>
</html>