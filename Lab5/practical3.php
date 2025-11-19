<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="get">
        Enter first number<input type="number" name="num1" required><br>
        select your operation<select name="opt" >
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select><br>
        Enter second number<input type="number" name="num2" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_GET["submit"])){
            $num1=$_GET["num1"];
            $num2=$_GET["num2"];
            $opt= $_GET["opt"];
            switch($opt){
                case "add":
                    $result=$num1 + $num2;
                    echo "Addition is: ".$result;
                    break;
                case "sub":
                    echo "The subtraction is:". $num1 - $num2 ;
                    break;
                case "mul":
                    echo "The multiplication is: ".$num1 * $num2;
                    break;
                case "div":
                        echo "The division is: ".$num1 / $num2;
                    break;
                default:
                    echo "Invalid operation selected.";
            }

        }

    ?>
</body>
</html>