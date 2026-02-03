<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="name"><br>
        <input type="text" name="psw"><br>
        <input type="submit" name="submit"><br>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $uname = "Admin";
        $psw = "admin123";
        $username = $_POST['name'];
        $password = $_POST['psw'];
        if ($_POST['name'] == $uname && $_POST['psw'] == $psw) {
            $_SESSION['uname'] = $username;
            $_SESSION['password'] = $password;
            header("Location: dashboard.php");
        } else {
            echo "incorrect";
        }
    }


    ?>
</body>

</html>