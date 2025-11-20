<!--  Write a program to accept a number and check whether the number is prime or not. Use user defined function name as
check (int n). The method returns 1, if the number is prime otherwise, it returns 0. (B) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="get">
        enter 1st num: <input type="number" name="num1"><br>
        enter 2nd num: <input type="number" name="num2"><br>
        <input type="submit" name="submit" value="submit"> 
    </form>
    <?php
        if(isset($_GET["submit"])){

            $n1=$_GET["num1"];
            $n2=$_GET["num2"];

            function isPrime($num) {
                if ($num <= 1) {
                    return false;
                }
                $count=0;
                for ($i = 1; $i <= $num; $i++) {
                    if ($num % $i == 0) {
                        $count++;
                    }
                }
                if($count==2){
                    return true;
                }
                else{
                    return false;
                }
            }
            for($i=$n1;$i<=$n2;$i++){
                if(isPrime($i))
                    echo $i." is a prime number<br>";
                else
                    echo $i." is not a prime number<br>";
            }
        }

    


    ?>
</body>
</html>