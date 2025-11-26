<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoDB";

$con = mysqli_connect($servername, $username, $password, $dbname);
if ($con) {
    echo "Connected successfully<br>";
    $query = "INSERT INTO student_detail (name,enrollmentNo,class) VALUES('abc',21020201155,'B')";

    $result = mysqli_query($con, $query);
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

// $query = "CREATE TABLE Students(
//     stu_id INT PRIMARY KEY AUTO_INCREMENT,
//     stu_name VARCHAR(50),
//     stu_enrollment_no INT(11),
//     class VARCHAR(10)
// )";
// $result = mysqli_query($con, $query);
// if ($result)
//     echo "Table created successfully";
// else
//     echo "Error creating table:" . mysqli_error($con);

// $result = mysqli_query($con, $query);
// if ($result)
//     echo "Table created successfully";
// else
//     echo "Error creating table:" . mysqli_error($con);




?>