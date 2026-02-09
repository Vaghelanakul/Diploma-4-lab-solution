<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];

    $query = "call insert_employee_detail('$name','$email',$salary)";

    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script> alert('Record inserted successfully');";
        echo "window.location.href='show.php' </script>";

    } else
        echo "Error inserting record:<br>" . mysqli_error($conn);
} else {
    die("Connection failed: " . mysqli_connect_error());
}

?>