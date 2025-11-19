<?php
    
    $students = [    "Bob" => 78, "Charlie" => 92, "David" => 67, "Eve" => 90 ];

    echo "original array<br>";
    foreach($students as $name => $score){
        echo "Name: $name, Score: $score<br>";
    }
    // o Display the total number of students.
    echo "Total number of students: " . count($students) . "<br>";

    // o Print all student names and all scores separately.

    //simple way 
    // foreach($students as $name => $score){
    //     echo $name . ", ";
    // }
    
    $keys = array_keys($students);
    echo "Student Names: ";
    
    foreach($keys as $name){
        echo $name . ", ";
    }
    echo "<br>Student Scores: ";

    //simple way
    //  foreach($students as $score){
    //     echo $score . ", ";
    // }

    $values = array_values($students);
    foreach($values as $score){
        echo $score . ", ";
    }
    echo "<br>";
    // o Calculate and display the total and product of all scores.
    $total = array_sum($values);
    echo "Total of all scores: " . $total . "<br>";

    //with loop

    // $sum=0;
    // foreach($values as $score){
    //     $sum += $score;
    // }
    // echo "Total of all scores: " . $sum . "<br>";


    $product = array_product($values);
    echo "Product of all scores: " . $product . "<br>"; 

    //with loop 
    // $pro=1;
    // foreach($values as $score){
    //     $pro *= $score;
    // }   
    // echo "Product of all scores: " . $pro . "<br>";

    // o Find the lowest and highest score in the list.

    $min = min($values);
    $max = max($values);
    echo "Lowest score: " . $min . "<br>";
    echo "Highest score: " . $max . "<br>";

    // o Check if any student has a score of 90.

    if(in_array(90, $values)){
        echo "Yes , there is at least one student with a score of 90.<br>";

        // $index = array_search(90, $values);
        // $studentName = $keys[$index];
        // echo "Student who scored 90: " . $studentName . "<br>";

    } else
        echo "No student has a score of 90.<br>";

    //with loop
    // $found = false;
    // foreach($values as $score){
    //     if($score == 90){
    //         $found = true;
    //         break;
    //     }
    // }
    // if($found)
    //     echo "There is at least one student with a score of 90.<br>";
    // else
    //     echo "No student has a score of 90.<br>";


    // o Find the student who scored 92
    $index = array_search(92, $values);

    if($index !== false){
        $studentName = $keys[$index];
        echo "Student who scored 92 is:  " . $studentName . "<br>";
    } else{
        echo "No student scored 92.<br>";
    }

?>