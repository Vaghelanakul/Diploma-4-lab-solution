<!-- Design an employee registration form and retrieve data in controller page using following Method: GET, POST, and
REQUEST. (B) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration Form</title>
</head>
<body>
    <form method="get" action="controller.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position" required><br><br>




        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
