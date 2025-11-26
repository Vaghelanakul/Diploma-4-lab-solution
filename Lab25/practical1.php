<!-- 1) Implement a PHP script for insert and read operations on students table using prepared statement in PHP. (A)-->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoDB";

$con = mysqli_connect($servername, $username, $password, $dbname);
if ($con) {
    $query = "INSERT INTO student_detail (name,enrollmentNo,class) VALUES (?,?,?)";
    $stmt = mysqli_prepare($con, $query);
    $name = "def";
    $enrollmentNo = 21020201156;
    $class = "A";
    mysqli_stmt_bind_param($stmt, 'sis', $name, $enrollmentNo, $class);
    $result = mysqli_stmt_execute($stmt);
    if ($result)
        echo "Record inserted successfully<br>";
    else
        echo "Error inserting record:<br>" . mysqli_error($con);


    $selectQuery = "SELECT * FROM student_detail";
    $result = mysqli_query($con, $selectQuery);
    if ($result) {
        while ($arr = mysqli_fetch_array($result)) {
            echo "ID: " . $arr['id'] . " Name: " . $arr['name'] . " Enrollment No: " . $arr['enrollmentNo'] . " Class: " . $arr['class'] . "<br>";
        }
    }


} else
    die("Connection failed: " . mysqli_connect_error());


?>