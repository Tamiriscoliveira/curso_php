<?php

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022;


$somaDenotas = 9;
$somaDenotas += 6;
$somaDenotas += 8;
$somaDenotas += 7.5;
$somaDenotas += 5;

$notaFilme = $somaDenotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do Filme: " . $nomeFilme . "\n";
echo "Ano de Lançamento: $anoLancamento \n";

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento \n";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Este filme ainda é novo \n";
} else {
    echo "Esse filme não é um lançamento \n";
}

//array - lista de valores
$notasParaoFilme = [2, 4, 5.4, 7, 9];

var_dump($nomeFilme);
var_dump($notasParaoFilme);



//array associativo
$filme = [
    "nome" => "Pantera Negra",
    "ano" => 2021,
    "nota" => 9,
    "genero" => "super-heroi",
];

echo $filme["ano"];
