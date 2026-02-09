<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$id = $_GET['uid'];
if ($conn) {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $salary = $_POST['salary'];

        $query = "call update_employee_detail($id,'$name','$email',$salary)";

        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script> alert('Record updated successfully');";
            echo "window.location.href='show.php' </script>";

        } else
            echo "Error updating record:<br>" . mysqli_error($conn);
    }


} else {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $query = "call get_employee_detail_by_id($id)";
    $arr = mysqli_fetch_array(mysqli_query($conn, $query))

        ?>
    <form method="post">

        Name: <input type="text" name="name" value="<?php echo $arr['name']; ?>"><br><br>
        Email: <input type="email" name="email" value="<?php echo $arr['email'] ?>"><br><br>
        Salary: <input type="text" name="salary" value="<?php echo $arr['salary'] ?>"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>

</body>

</html>