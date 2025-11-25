<!-- 1) Write a PHP script that starts a session and sets a session variable called username with the value (your name). (A) -->

<?php

session_start();

$_SESSION['username'] = 'abc';

echo "Session variable 'username' is set to " . $_SESSION['username'];





?>