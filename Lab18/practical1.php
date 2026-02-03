<!-- 1) Write a program to check the given file name is exits or not 
if exits than print the size of the give file. ( -->

<?php
$fileName = 'D:\xampp\htdocs\Diploma-4-lab-solution\Lab17\practical1.php';
if (file_exists($fileName)) {
    echo "File $fileName exists<br>";
    echo "size of the file is: " . filesize($fileName) . "bytes";
} else
    echo "File $fileName does not exist";

?>