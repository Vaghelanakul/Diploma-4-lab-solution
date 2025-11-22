
<!-- Design a student registration form and retrieve data in controller page using following Method: GET, POST, and REQUEST.
(A) -->

<?php
    
    $name = $_REQUEST['name'];
    $email= $_POST['email'];
    $age = $_REQUEST['age'];
    $gender = $_POST['gender'];

    echo "<h2>Student Registration Details:</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Age: $age <br>";
    echo "Gender: $gender";

?>