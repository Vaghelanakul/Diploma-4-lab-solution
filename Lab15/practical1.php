<!-- 1) Write a program to explore the string functions. (A) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body bgcolor="gray">
    <?php

    $str = " Hello World! Welcome to PHP programming. ";

    echo "Original string is:" . $str . "<br>";

    // length
    echo "len of string is:" . strlen($str) . "<br>";

    // word count
    echo "word count is:" . str_word_count($str);

    //reverse
    echo "<br> reverse string is:" . strrev($str);

    // search for a specific text within a string
    echo "<br> search for PHP in string:" . strpos($str, "PHP");

    //uppercase
    
    echo "<br> str in uppercase:" . strtoupper($str);

    //lowercase
    echo "<br> str in lowercase:" . strtolower($str);

    // trim
    echo "<br> trimmed string is:" . trim($str);

    //substring
    echo "<br> substring is:" . substr($str, 14); //
    
    //replace
    echo "<br> replace PHP with JS :" . str_replace("PHP", "JS", $str);//
    
    //explode
    $strArr = explode(" ", $str); //op :["Hello","World!","Welcome","to","PHP","programming."] 
    echo "<br> explode string is:<br>";
    print_r($strArr);

    ?>
</body>

</html>