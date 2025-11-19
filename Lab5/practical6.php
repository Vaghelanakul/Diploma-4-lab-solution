<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Enter letter:<input type="text" name="letter" >
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_GET['submit'])){
            $le= $_GET['letter'];
            if( $le=="A" || $le=="a" ||
                $le=="E" || $le=="e" ||
                $le=="I" || $le=="i" ||
                $le=="O" || $le=="o" ||
                $le=="U" || $le=="u" 
            )
                echo "$le is a Vowel";
            else
                echo "$le is a Consonant";
        }

    ?>
    
</body>
</html>