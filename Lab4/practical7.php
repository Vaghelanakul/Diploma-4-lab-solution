<?php
    $percentage=80;
    if($percentage<40) 
        echo "Fail";
    elseif($percentage>=40 && $percentage<=50)
        echo "Pass Class";
    elseif($percentage>50 && $percentage<=60)
        echo "Second Class";
    elseif($percentage>60 && $percentage<=70)
        echo "First Class";
    elseif($percentage>70)
        echo "Distinction";
    

?>