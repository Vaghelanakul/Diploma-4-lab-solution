<?php
    if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
        echo "<h1>Welcome to dashboard " . $_COOKIE['username'] . "</h1>";
        echo "<a href='logout.php'><button>Logout</button></a>";

    }
    else
        header('Location: login.php');

?>