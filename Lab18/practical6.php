<!-- Write a program to append the file named “students.txt” to add details of 3 new students in a file. (C -->

<?php

    $file = 'students.txt';
    $newStudents = ['rahul', 'sonia', 'anil'];
    $fileHandel = fopen($file,'a');
    foreach($newStudents as $student){
        fwrite($fileHandel,$student."\n");
    }
    fclose($fileHandel);
    echo "New student names appended to $file successfully.";

?>