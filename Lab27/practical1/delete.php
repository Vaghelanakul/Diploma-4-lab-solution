<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$id = $_GET['did'];
if ($conn) {
    $query = "call delete_student_detail($id)";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script> alert('Record delete successfully');";
        echo "window.location.href='show.php'</script>";
    } else
        echo "Error deleting record:<br>" . mysqli_error($conn);
} else
    die("Connection failed: " . mysqli_connect_error());



?>