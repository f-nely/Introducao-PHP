<?php

$peso = 63;
$altura = 1.63;

$imc = $peso / ($altura ** 2);

if ($imc < 18.5){
    echo "Abaixo do peso";
} elseif ($imc >= 18.5 && $imc <= 24.9){
    echo "Peso normal";
} elseif ($imc >= 25 && $imc <= 29.9){
    echo "Sobrepeso";
} elseif ($imc >= 30 && $imc <= 34.9){
    echo "Obesidade gra 1";
} elseif ($imc >= 35 && $imc <= 39.9){
    echo "Obesidade grau 2";
} else{
    echo "Obesidade grau 3";
}