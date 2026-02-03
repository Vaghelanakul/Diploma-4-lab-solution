<?php
// This page receives the data from index.php
echo "<h2>Form Submitted Successfully!</h2>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the "Outside" input
    $id = $_POST['student_id'] ?? 'Not provided';

    // Collect data from the "Inside" input
    $name = $_POST['fullname'] ?? 'Not provided';

    echo "<p><strong>Data Received:</strong></p>";
    echo "Student ID: $id<br>";
    echo "Full Name: $name<br>";
} else {
    echo "No data received.";
}
?>