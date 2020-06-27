<?php

$conta1 = [
    "titular" => "Vinicius",
    "saldo" => 1000
];
$conta2 = [
    "titular" => "Mary",
    "saldo" => 15000
];
$conta3 = [
    "titular" => "Harry",
    "saldo" => 300
];
$contaCorrente = [
    $conta1,
    $conta2,
    $conta3
];

foreach ($contaCorrente as $contas){
    echo $contas ["titular"] . PHP_EOL;
}

