<!-- 3) Create static login application using COOKIE in PHP. (B) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $uName= "admin";
            $psw = "admin@123";

            if($username ==$uName && $password == $psw){
                setcookie('username',$username,time()+3600);
                setcookie('password',$password,time()+3600);
                header('Location: dashboard.php');
            }
            else
                echo "Invalid username or password";
            
        }

    ?>
</body>
</html>