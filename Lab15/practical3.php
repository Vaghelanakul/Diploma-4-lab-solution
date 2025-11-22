<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="gray">
    <?php
        $names = [" Alice ", "JessiCA", " charlie", "DAVID", "eVa", "AleXa", "Olivia", " Levi "];
        echo "Original Names:<br>";
        
        foreach($names as $name){
            echo "$name,";
        }

        // o Trim leading and trailing whitespace from each name.
        // $newNames = array_map('trim', $names);

        foreach($names as $i => $name){
            $newNames[$i] = trim($name);
        }

        echo "<br>Trimmed Names:<br>";
        // print_r($newNames);

        foreach($newNames as $name){
            echo "$name,";
        }
        // o Convert all names to lowercase.

        foreach($newNames as $i => $name)
            $lowerNames[$i]= strtolower($name);

        echo "<br>Lowercase Names:<br>";
        print_r($lowerNames);

        // o Capitalize the first letter of each name.

        foreach($lowerNames as $i => $name)
            $capNames[$i]= ucfirst($name);
        
        echo "<br>Capitalized Names:<br>";
        print_r($capNames);

        // o Find and display the length of each name.
        echo "<br>Length of each name:<br>";
        foreach($newNames as $name)
            echo "$name len is:".strlen($name)."<br>";

        // o Reverse each name and display the reversed names.
        $revStrings = array_map("strrev",$newNames);
        print_r($revStrings);


        // o Check if any name contains the substring "vi" (case-insensitive). Print those names.
        echo "<br>Names containing 'vi':<br>";
        foreach($newNames as $i=>$name)
            echo stripos($name,"vi") !== false ? "$name contains vi : Yes<br>" : " $name contains vi :No<br>";

        // o Join all names into a single string separated by a comma and a space

        $joinedNames = implode(", ",$newNames);
        echo "<br>Joined Names:<br>";
        echo $joinedNames;



    ?>
</body>
</html>