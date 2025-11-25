<!-- ) Write a program to create file named “employee.txt” to store empno, name, gender and mobileno. Open the same file again
to display the content of the file. (B -->

<?php

    $fileName = 'employee.txt';
    $employees = [
        ['empno' => 101, 'name' => 'abc', 'gender' => 'Male', 'mobileno' => '1234567890'],
        ['empno' => 102, 'name' => 'xyz', 'gender' => 'Female', 'mobileno' => '0987654321'],
        ['empno' => 103, 'name' => 'asd', 'gender' => 'Male', 'mobileno' => '5555555555']
    ];

    $file = fopen($fileName,'w');
    foreach($employees as $employee){
        $line=$employee['empno'].' '.$employee['name'].' '.$employee['gender'].' '.$employee['mobileno']."\n";
        fwrite($file,$line);
    }
    fclose($file);
    echo "File $fileName created and employee details written successfully.<br><br>";

    $file1=fopen($fileName,'r');

    $text = fread($file1,filesize($fileName));
    echo nl2br($text);
    fclose($file1);
?>