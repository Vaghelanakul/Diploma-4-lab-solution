<?php

if (!isset($_POST['submit'])) {
    header("Location:show.php");
}

$con = mysqli_connect("localhost", "root", "", "demodb");


if ($con) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
    $skills_array = $_POST['skills'];

    $skills = implode(",", $skills_array);

    $query = "INSERT INTO employee_detail (name,email,salary,gender,skills) 
                VALUES ('$name','$email','$salary','$gender','$skills'); ";

    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>alert('Record inserted successfully');";
        echo "window.location.href='show.php' </script>";

    } else {
        echo "error inserting record<br>" . mysqli_error($con);
    }

}




?>