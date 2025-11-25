<!-- 7) Write a program to read a csv file named “result.csv”. (C) -->
<?php

    $file = "result.csv";
    if(file_exists($file)){
        $fileHandle = fopen($file,'r');
        while($data = fgetcsv($fileHandle)){
            foreach($data as $field){
                echo $field." ";
            }
            echo "<br>";

        }
        fclose($fileHandle);

    }
    else
        echo "File $file does not exist.";

?>