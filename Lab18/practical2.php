<!-- 2) Write a program to create file named “students.txt” to store names of the students. (A) -->

<?php
$fileName = 'students.txt';
// $students= ['abc','xyz','asd','nakul'];
$file = fopen($fileName, 'w');
// foreach($students as $student)
fwrite($file, "abc def ghi");
fclose($file);

echo "File $fileName created and student names written successfully.";

?>