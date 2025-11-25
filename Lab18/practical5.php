<!-- 5) Write a file named “teachers.txt” and copy the content of file named “employee.txt” in it. (B) -->
<?php

    $employeeFile = 'employee.txt';
    $teacherFile = 'teachers.txt';

    if(file_exists($employeeFile)){
        if(copy($employeeFile,$teacherFile))
            echo "Content copied from $employeeFile to $teacherFile successfully.";
        else
            echo "Failed to copy content.";
    }
    else
        echo "File $employeeFile does not exist.";

?>