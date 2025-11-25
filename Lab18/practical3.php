<?php
    $fileName= 'students.txt';
    if(file_exists($fileName)){
        $file= fopen($fileName,'r');
        echo 'content of the file '.$fileName.':<br><br>';
        $text = fread($file,filesize($fileName));
        echo $text;
        fclose($file);
        
    }


?>