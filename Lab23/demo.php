<?php

// PHP Lab-23 1) Implement a PHP script for update and delete operations on 
// the student table. (A)


// delete query

// 1st step :

$con = mysqli_connect("localhost", "root", "", "demodb");

if ($con) {

    $query = "DELETE FROM student_detail WHERE id= 11 ";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo "data deleted successfully";
    } else {
        echo "data not delete";
    }
}



?>