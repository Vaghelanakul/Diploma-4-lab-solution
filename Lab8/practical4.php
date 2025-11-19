<?php
    $scores = [85, 78, 92, 67, 90]; 
    // o Shuffle the scores randomly and display the result.
    echo "Original Scores: ";
    foreach($scores as $score){
        echo $score . " ";
    }
    echo "<br>";
    shuffle($scores);
    echo "Shuffled Scores: ";
    foreach($scores as $score){
        echo $score . " ";
    }
    // o Add a new score to the end of the list.
    array_push($scores, 8);
    echo "<br>After Adding new element at the end: ";
    foreach($scores as $score){
        echo $score . " ";
    }
    // o Remove the last score.
    array_pop($scores);
    echo "<br>After Removing last element: ";
    foreach($scores as $score){
        echo $score . " ";
    }
    // o Remove the first score.
    array_shift($scores);
    echo "<br>After Removing first element: ";
    foreach($scores as $score){
        echo $score . " ";
    }
    // o Add a new score to the beginning of the list. (B)
    array_unshift($scores, 1);

    echo "<br>After Adding new element at the beginning: ";
    foreach($scores as $score){
        echo $score . " ";
    }

?>  