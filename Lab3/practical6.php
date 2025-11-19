<?php
    $globalVar="global variable";
    function demoFunction(){
        $localVar="local variable";
        echo $localVar;
        echo "<br>";
        global $globalVar; 
        echo $globalVar;

        echo "<br>";
        //another way to access global variable
        //we can use the $GLOBALS array to access the 
        //global variables in local scope

        echo $GLOBALS['globalVar'];
        
        static $staticVar=0;
        $staticVar++;
        echo "<br>";
        echo "static var value is: $staticVar";
        echo "<hr>";
    }
    demoFunction();
    demoFunction();
?>