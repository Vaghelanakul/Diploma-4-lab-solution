<?php

$con = mysqli_connect("localhost", "root", "", "demodb");

$stmt = mysqli_prepare($con, "INSERT INTO EMPLOYEE_DETAILS(NAME,EMAIL,SALARY) VALUES (?,?,?) ");


$name = $_POST['name'];
$email = $_POST['name'];
$salary = $_POST['name'];

mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $salary);

mysqli_stmt_execute($stmt);

$result = myqli_stmt_get_result($stmt);




?>