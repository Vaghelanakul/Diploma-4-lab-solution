
<!-- Design a student registration form and retrieve data in controller page using following Method: GET, POST, and REQUEST.
(A) -->

<?php
    
    $name = $_REQUEST['name'];
    $email= $_GET['email'];
    $position = $_REQUEST['position'];
    $department =$_GET["department"];


    echo "<h2>Employee Registration Details:</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Position: $position <br>";
    echo "Department: $department";

?>