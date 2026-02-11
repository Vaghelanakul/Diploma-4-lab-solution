<!-- Implement a PHP script for insert and read operations on
  the student table. (A) 

 lab-21 def 
Write a PHP to check database connectivity on a sample database.
-->
<?php

$con = mysqli_connect("localhost", "root", "", "diploma_demo");
if (!$con) {
    echo "not connected";
}
// $query = "INSERT INTO studenttbl (name,rollNo,class) VALUES('abc',210,'c-2')";

// $result = mysqli_query($con, $query);
// if ($result)
//     echo "Record inserted successfully<br>";
// else
//     echo "Error inserting record:<br>" . mysqli_error($con);


//select query 
$query = "SELECT * FROM studenttbl";
$result = mysqli_query($con, $query);
if ($result) {
    while ($arr = mysqli_fetch_array($result)) {
        echo "id: " . $arr["id"] . "name:" . $arr['name'] .
            "rollNo:" . $arr['rollNo'] .
            "class:" . $arr['class'] . "</br>";
    }
} else {
    echo "no data found";
}






?>