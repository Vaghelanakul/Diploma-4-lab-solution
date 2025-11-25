<!-- 2) Store multiple user details like username, email, and role in the session and display them on the profile page. (B -->
<?php
session_start();

$_SESSION['userDetails'] = [
    'username' => 'abc',
    'email' => 'abc@gmail.com',
    'role' => 'admin'
];

// foreach ($_SESSION['userDetails'] as $key => $value) {
//     echo "<h3>" . $key . " : " . $value . "</h3>";
// }

echo "<h3>Username : " . $_SESSION['userDetails']['username'] . "</h3>";
echo "<h3>Email : " . $_SESSION['userDetails']['email'] . "</h3>";
echo "<h3>Role : " . $_SESSION['userDetails']['role'] . "</h3>";



?>