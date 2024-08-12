<?php

$peso = 100;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "Seu imc é de $imc. Você está com o IMC" .PHP_EOL;

if ($imc < 18){
    echo "abaixo" .PHP_EOL;
}elseif ($imc < 25){
    echo "dentro" .PHP_EOL ;
}else{
    echo "acima" .PHP_EOL;
}

echo "do recomendado" .PHP_EOL;