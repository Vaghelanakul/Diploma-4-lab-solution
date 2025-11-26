<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoDB";

$con = mysqli_connect($servername, $username, $password, $dbname);
if ($con) {
    echo "Connected successfully<br>";
    $query = "INSERT INTO employee_detail(name,email,salary) VALUES('abc','abc@gmail.com',25000)";

    $result = mysqli_query($con, $query);
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