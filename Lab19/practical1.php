<!-- 1) Create a PHP script that sets a cookie named username with the value (your name), and make it last for 1 hour. (A)-->

<?php

    $cookie = setcookie("username","abc",time()+3600);
    if($cookie){
        echo "Cookie 'username' is set successfully.";
        echo "<br>";
        echo "Value of cookie 'username' is: ".$_COOKIE["username"];
    }
    else
        echo "Failed to set cookie 'username'.";

    



?>