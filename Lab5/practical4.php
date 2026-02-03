<?php
$percentage = 50;
switch ($percentage) {
    case ($percentage < 40):
        $class = "Fail";
        break;
    case ($percentage >= 40 && $percentage < 50):
        $class = "Pass Class";
        break;
    case ($percentage >= 50 && $percentage < 60):
        $class = "Second Class";
        break;
    case ($percentage >= 60 && $percentage < 70):
        $class = "First Class";
        break;
    default:
        $class = "Distinction";

}


?>