<!-- 1) Implement a PHP script for insert and read operations on students table using prepared statement in PHP. (A)-->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoDB";

$con = mysqli_connect($servername, $username, $password, $dbname);
if ($con) {
    $query = "INSERT INTO employee_detail (name,email,salary) VALUES (?,?,?)";
    $stmt = mysqli_prepare($con, $query);
    $name = "def";
    $email = "def@gmail.com";
    $salary = 30000;
    mysqli_stmt_bind_param($stmt, 'ssi', $name, $email, $salary);
    $result = mysqli_stmt_execute($stmt);
    if ($result)
        echo "Record inserted successfully<br>";
    else
        echo "Error inserting record:<br>" . mysqli_error($con);


    $selectQuery = "SELECT * FROM employee_detail";
    $result = mysqli_query($con, $selectQuery);
    if ($result) {
        while ($arr = mysqli_fetch_array($result)) {
            echo "ID: " . $arr['id'] . " Name: " . $arr['name'] . " Email: " . $arr['email'] . " Salary: " . $arr['salary'] . "<br>";
        }
    }


} else
    die("Connection failed: " . mysqli_connect_error());


?>