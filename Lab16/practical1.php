<!-- 1) Implement server-side validation on student registration form using PHP. (A) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        Name: <input type="text" name="name" ><br><br>
        Email: <input type="text" name="email" ><br><br>
        Enrollment No: <input type="text" name="enrollNo" ><br><br>
        Password: <input type="password" name="password" ><br><br>
        <input type="submit" name="submit" value="Register">
    </form>

    <?php
        if(isset($_POST['submit'])){

            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $enrollNo = trim($_POST['enrollNo']);
            $password = trim($_POST['password']);

                $errors = [];
                // Name validation
                if(!preg_match("/[a-zA-z0-9 ]+$/",$name)){
                    $errors[] = "Invalid name.";

                }
                // Email validation
                //abc@gmail.com

                if(!preg_match("/^[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-_]+\.[a-zA-Z]{2,}$/",$email)){
                    $errors[] = "Invalid email.";
                }

                //password validation
                if(!preg_match("/^[a-zA-z0-9._@ d-]{8,}$/",$password)){
                    $errors[] = "Invalid password.";
                }

                // Enrollment No validation
                if(!preg_match("/^[0-9]{11}$/",$enrollNo)){
                    $errors[] = "Invalid enrollment number.";
                }
                // Display errors or success message
                if(!empty($errors)){
                    foreach($errors as $error)
                        echo "<p style='color:red;'>$error</p>";
                    
                }
                else
                    echo "<p style='color:green;'>Registration successful!</p>";
        }



    ?>
    
</body>
</html>
