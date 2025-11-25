<!-- 2) Understanding and working with PHP functions for database connectivity. (B) -->


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databaseName";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
    die("Connection failed: " . mysqli_connect_error());
echo "Connected successfully<br>";

//query function for executing sql queries

$query = "CREATE TABLE tblDemo(
    columnName INT PRIMARY KEY AUTO_INCREMENT,
    columnName VARCHAR(50),
    columnName INT,
    columnName VARCHAR(50)
)";

$result = mysqli_query($conn, $query);
if ($result)
    echo "Table created successfully";
else
    echo "Error creating table:" . mysqli_error($conn);





?>