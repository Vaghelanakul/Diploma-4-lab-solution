<?php
// same
$servername = "localhost";
$username = "root";
$password = "";
// different
$dbname = "diploma_demo";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn)
    echo "Connected successfully<br>";
else
    echo mysqli_error($conn);



?>