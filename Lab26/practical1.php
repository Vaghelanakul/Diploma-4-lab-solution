<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoDB";

$con = mysqli_connect($servername, $username, $password, $dbname);
if ($con) {
    echo "Connected successfully<br>";
    $query = "UPDATE student_detail SET name=?,class=? WHERE id=?";

    $stmt = mysqli_prepare($con, $query);
    $name = "abc";
    $class = "a";
    $id = 2;
    mysqli_stmt_bind_param($stmt, 'ssi', $name, $class, $id);

    $result = mysqli_stmt_execute($stmt);
    if ($result)
        echo "Record updated successfully<br>";
    else
        echo "Error updating record:<br>" . mysqli_error($con);

    $deleteQuery = "DELETE FROM student_detail WHERE id=?";
    $stmt = mysqli_prepare($con, $deleteQuery);
    $id = 5;
    mysqli_stmt_bind_param($stmt, 'i', $id);

    $result = mysqli_stmt_execute($stmt);

    if ($result)
        echo "Record deleted successfully<br>";
    else
        echo "Error deleting record:<br>" . mysqli_error($con);


    $selectQuery = "SELECT * FROM student_detail";
    $result = mysqli_query($con, $selectQuery);
    if ($result) {
        while ($arr = mysqli_fetch_array($result)) {
            echo "ID: " . $arr['id'] . " Name: " . $arr['name'] . " Enrollment: " . $arr['enrollmentNo'] . " Class: " . $arr['class'] . "<br>";
        }
    }


} else
    die("Connection failed: " . mysqli_connect_error());


?>