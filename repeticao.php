<?php

echo "Trabalhando com while\n";
$j = 0;

while ($j <= 10) {
    if ($j == 7){
        break;
    }
    echo $j . PHP_EOL;
    $j++;
}

echo "Trabalhando com for\n";
echo "Imprimindo só os ímpares: \n";
for ($i = 10; $i > 0; $i--){
    if($i % 2 == 0){
        continue;
    }
    echo $i . PHP_EOL;
}
echo "Trabalhando com do while \n";
$x = 0;
do{
    echo $x . PHP_EOL;
    $x++;
}while($x <= 5);

