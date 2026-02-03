<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        Username:
        <input type="text" name="uName"><br>
        Email :
        <input type="email" name="email"><br>
        password:
        <input type="password" name="psw"><br>
        <input type="submit" value="Login" name="submit">
    </form>
    <?php

    if (isset($_GET['submit'])) {
        $name = $_GET["uName"];
        $email = $_GET['email'];
        $psw = $_GET["psw"];
        echo "name is:$name<br>";
        echo "email is:$email<br>";
        echo "pwd is:$psw<br>";
    }

    ?>

</body>

</html>