<?php

/*$age = 17;
$numberPeople = 2;

echo "Você pode entrar se tiver 18 anos ou 16 anos acompanhado" . PHP_EOL;
if ($age >= 18) {
    echo "Você tem $age anos . Pode entrar sozinho.";
} elseif ($age >= 16 && $numberPeople > 1) {
    echo "Você tem $age anos, e está acompanhado.";
} else {
    echo "Vocẽ só tem $age anos. Você não pode entrar.";
}


echo PHP_EOL;
echo "Adeus";*/

$idade = 18;

$msg = $idade >= 18 ? "Pode entrar " : "Não pode entrar";
echo $msg;