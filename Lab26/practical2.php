<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoDB";

$con = mysqli_connect($servername, $username, $password, $dbname);
if ($con) {
    echo "Connected successfully<br>";
    $query = "UPDATE employee_detail SET name=?,email=?,salary=? WHERE id=?";

    $stmt = mysqli_prepare($con, $query);
    $name = "abc";
    $email = "abc@example.com";
    $salary = 50000;
    $id = 7;
    mysqli_stmt_bind_param($stmt, 'ssii', $name, $email, $salary, $id);

    $result = mysqli_stmt_execute($stmt);
    if ($result)
        echo "Record updated successfully<br>";
    else
        echo "Error updating record:<br>" . mysqli_error($con);

    $deleteQuery = "DELETE FROM employee_detail WHERE id=?";
    $stmt = mysqli_prepare($con, $deleteQuery);
    $id = 3;
    mysqli_stmt_bind_param($stmt, 'i', $id);

    $result = mysqli_stmt_execute($stmt);

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


?>