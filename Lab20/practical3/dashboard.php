<?php

session_start();

if (isset($_SESSION['uname'])) {
    echo "Welcome" . $_SESSION['uname'];
    echo "<a href='logout.php'><button>logout</button></a>";
} else {
    header("Location: login.php");
}

?>