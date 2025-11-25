<!-- 2) Make a script that counts how many times a user has visited the page by using a cookie. (B) 
-->
<?php

    if(isset($_COOKIE['visit_count']))
        $visitCount= $_COOKIE['visit_count']+1;
    else
        $visitCount=1;

    setcookie("visit_count",$visitCount,time()+3600);

    echo "You have visited this page ".$visitCount." time(s).";
?>