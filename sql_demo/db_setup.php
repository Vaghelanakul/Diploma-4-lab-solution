<?php
/**
 * Database Setup Script for SQL Injection Demo
 * Run this file first to create the database and sample data
 */

$host = "localhost";
$username = "root";
$password = "";

// Connect to MySQL (Procedural Style)
$conn = mysqli_connect($host, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS sql_injection_demo";
if (mysqli_query($conn, $sql) === TRUE) {
    echo "Database 'sql_injection_demo' created successfully!<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Select the database
mysqli_select_db($conn, "sql_injection_demo");

// Create users table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100),
    role VARCHAR(20) DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql) === TRUE) {
    echo "Table 'users' created successfully!<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Clear existing data
mysqli_query($conn, "TRUNCATE TABLE users");

// Insert sample users (passwords stored in plain text for demo purposes only!)
$users = [
    ["admin", "admin123", "admin@example.com", "admin"],
    ["john", "john456", "john@example.com", "user"],
    ["alice", "alice789", "alice@example.com", "user"],
    ["bob", "bob101112", "bob@example.com", "user"],
    ["secret_user", "supersecret", "secret@example.com", "admin"]
];

foreach ($users as $user) {
    $sql = "INSERT INTO users (username, password, email, role) VALUES ('{$user[0]}', '{$user[1]}', '{$user[2]}', '{$user[3]}')";
    mysqli_query($conn, $sql);
}

echo "Sample users inserted successfully!<br><br>";

echo "<h3>Sample Users in Database:</h3>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Username</th><th>Password</th><th>Email</th><th>Role</th></tr>";

$result = mysqli_query($conn, "SELECT * FROM users");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['username']}</td>";
    echo "<td>{$row['password']}</td>";
    echo "<td>{$row['email']}</td>";
    echo "<td>{$row['role']}</td>";
    echo "</tr>";
}
echo "</table>";

echo "<br><br><a href='index.php'>Go to SQL Injection Demo</a>";

mysqli_close($conn);
?>