<!-- Write a program to check given number is Armstrong or not. (C) -->
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
            $temp=$num;
            $digits =strlen($num);
            $sum=0;
            while($num>0){
                $rem=$num%10;
                $power=1;
                for($i=1;$i<=$digits;$i++){
                    $power*=$rem;
                }
                $sum+=$power;
                $num=(int)($num/10);
            }
            if($temp==$sum)
                echo "$temp is an Armstrong Number";
            else
                echo "$temp is not an Armstrong Number";
        }

        //153,370,371,407
    ?>
</body>
</html>