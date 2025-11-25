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
        username: <input type="text" name="username" required><br><br>
        password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $uName = "admin";
        $psw = "admin123";

        if ($username === $uName && $password === $psw) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('Location: dashboard.php');
        } else
            echo "<h3 style='color:red;'>Invalid username or password</h3>";
    }




    ?>
</body>

</html>