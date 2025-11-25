<?php

session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {

    echo "<h2>Welcome to Dashboard, " . $_SESSION['username'] . "</h2>";

    echo "<a href='logout.php'><button>Logout</button></a>";

} else
    header('Location: login.php');



?>