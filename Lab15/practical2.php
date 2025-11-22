<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="gray" >
    <?php
        
        $text = " PHP is a powerful scripting language for web development. ";
        echo "Original string is:$text<br>";
        
        // o Find the length of the string.       
        echo "Length of the string is: " . strlen($text);

        // o Convert the string to uppercase and display the result.
        echo "<br> String in uppercase is: " . strtoupper($text);
        
        // o Convert the string to lowercase and display the result.
        echo "<br> String in lowercase is: " . strtolower($text);

        // o Find the position of the word "powerful" in the string.
        echo "<br> Position of the word 'powerful' is: " . strpos($text,"powerful");
        
        // o Replace the word "scripting" with the word "programming".
        echo "<br> After replacing 'scripting' with 'programming': " .str_replace("scripting","programming",$text);
                
        // o Extract the word "PHP" from the string.
        echo "<br> Extracted word is:".substr($text,1,3);

        // o Reverse the string and display the result.
        echo "<br> Reversed string is: " . strrev($text);

        // o Trim the leading and trailing spaces from the string.

        echo "<br> Trimmed string is:" . trim($text);

        // o Repeat the string "PHP " 5 times and display the result.
        echo "<br> Repeated string is :".str_repeat("PHP ",5);

        // o Implode the array of words ["PHP", "is", "a", "powerful", "language"] into a string, with a space separating each word.

        $wordsArr= ["PHP", "is", "a", "powerful", "language"];

        echo "array to string is:".implode(" ",$wordsArr);

        // o Explode the string into an array using spaces as the delimiter, and display the array.

        $strArr = explode(" ",$text);
        echo "<br> string to array is:<br>";
        print_r($strArr);

        // o Shuffle the characters of the string randomly and display the result.

        echo "<br> Shuffled string is:".str_shuffle($text);

        // o Convert newlines in a string to <br> tags. Use the string "Hello\nWorld" for this task. (B)
        $strWithNewline = "Hello\nWorld";
        echo "<br> original str \n :$strWithNewline ";
    
        echo "<br> str with \n converted to br tag is:".nl2br($strWithNewline);
    
    ?>
</body>
</html>