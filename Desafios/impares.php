<?php

// Exibir os ímpares até 100
for ($i = 1; $i < 100; $i++){
    if ($i % 2 == 0){
        continue;
    }
    echo $i . PHP_EOL;
}