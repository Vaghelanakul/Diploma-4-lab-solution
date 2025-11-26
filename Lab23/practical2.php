<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoDB";

$con = mysqli_connect($servername, $username, $password, $dbname);
if ($con) {
    echo "Connected successfully<br>";
    $query = "UPDATE employee_detail SET name='xyz',email='xyz@gmail.com' WHERE id=2";

    $result = mysqli_query($con, $query);
    if ($result)
        echo "Record updated successfully<br>";
    else
        echo "Error updating record:<br>" . mysqli_error($con);

    $deleteQuery = "DELETE FROM employee_detail WHERE id=4";
    $result = mysqli_query($con, $deleteQuery);

    if ($result)
        echo "Record deleted successfully<br>";
    else
        echo "Error deleting record:<br>" . mysqli_error($con);


    $selectQuery = "SELECT * FROM employee_detail";
    $result = mysqli_query($con, $selectQuery);
    if ($result) {
        while ($arr = mysqli_fetch_array($result)) {
            echo "ID: " . $arr['id'] . " Name: " . $arr['name'] . " Email: " . $arr['email'] . " Salary: " . $arr['salary'] . "<br>";
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