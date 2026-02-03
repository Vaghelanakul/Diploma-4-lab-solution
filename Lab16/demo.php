<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        Date of Birth: <input type="date" name="dob"><br><br>
        Age: <input type="number" name="age"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Register">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
        $password = $_POST['password'];
        $errors = [];
        //name validation
        if (!preg_match("/^[a-zA-Z0-9 ]$/", $name)) {
            $errors[] = "Invalid name.";
        }
        //abv@gmail.com
        if (!preg_match("/^[a-z0-9._-]+@[a-z0-9]+\.+[a-zA-Z]{2,}$/", $email)) {
            $errors[] = "invalid email.";
        }


    }

    ?>

</body>

</html>