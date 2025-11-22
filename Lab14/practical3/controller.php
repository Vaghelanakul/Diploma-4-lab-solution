<?php   

    $txt = $_POST['text'] ;
    $psw= $_REQUEST['password'] ;
    $email= $_REQUEST['email'] ;
    $number= $_REQUEST['number'] ;
    $data = $_POST['date'] ;
    $range= $_REQUEST['range'] ;
    $checkbox = $_REQUEST['checkbox'];
    $radio = $_REQUEST['radio'] ;
    echo "Text: " . $txt . "<br>";
    echo "Password: " . $psw . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Number: " . $number . "<br>";
    echo "Date: " . $data . "<br>";
    echo "Range: " . $range . "<br>";
    foreach($checkbox as $value){
        echo "Checkbox: " . $value . "<br>";
    }   
    echo "<br>";
    echo "Radio: " . $radio . "<br>";



?>