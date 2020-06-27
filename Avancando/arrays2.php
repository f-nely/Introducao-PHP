<?php

$myArray = ["PHP", "Java", "Python"];
// Add item to a list
$myArray[] = "Ruby";
$myArray[4] = "JavaScript";

foreach ($myArray as $array){
    echo $array . PHP_EOL;
}

// Remove item to a list
unset($myArray[4]);
echo "Remove item from list\n";
foreach ($myArray as $array){
    echo $array . PHP_EOL;
}