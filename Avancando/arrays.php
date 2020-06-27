<?php
$ageList = [21, 23, 19, 25, 30, 41, 10];
// Add item em um array
$ageList[] = 80;
$ageList[8] = 100;
// Function list
list($ageVinicius, $ageJonh) = $ageList;
echo "Idade Vinicius é $ageVinicius e Idade John é $ageJonh";
for ($i = 0; $i < count($ageList); $i++){
    echo $ageList[$i] . PHP_EOL;
}
echo "Usando foreach \n";
foreach ($ageList as $age){
    echo $age . PHP_EOL;
}