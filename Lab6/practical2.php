<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Enter number:<input type="number" name="num" >
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_GET["submit"])){
            $n=$_GET["num"];

            echo "using for loop:<br>";
            for($i=0;$i<=$n;$i++){
                if($i%2!=0) 
                    echo $i." ";
            }
            echo "<br>using while loop:<br>";
            $i=0;
            while($i<=$n){
                if($i%2!=0)
                    echo $i." ";
                $i++;
            }

            echo "<br>using do while loop:<br>";
            $i=0;
            do{
                if($i%2!=0)
                    echo $i." ";
                $i++;
            }while($i<=$n);
        }

    ?>
</body>
</html>