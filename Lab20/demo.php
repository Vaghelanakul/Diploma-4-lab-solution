<?php
// 1) Write a PHP script that starts a session and sets a session 
// variable called username with the value (your name). (A)

session_start();

$_SESSION['username'] = "abc";

echo "session variable is set and value is:" . $_SESSION['username'];

?>