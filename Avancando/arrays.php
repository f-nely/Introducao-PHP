<?php
$ageList = [21, 23, 19, 25, 30, 41, 10];

for ($i = 0; $i < count($ageList); $i++){
    echo $ageList[$i] . PHP_EOL;
}
echo "Usando foreach \n";
foreach ($ageList as $age){
    echo $age . PHP_EOL;
}