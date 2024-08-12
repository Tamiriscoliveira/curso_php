<?php

//array (vetor)
//$idadeList = array(21,23,19,25,30,41,18);

$idadeList = [21,23,19,25,30,41,18,34];
$umaIdade = $idadeList[4];
echo $umaIdade .PHP_EOL;

$filmes = ['Avengers: Endgame', 'Captain Marvel', 'Homem-Formiga e a Vespa'];
$filmeEscolhido = $filmes[2];
echo $filmeEscolhido .PHP_EOL;

/* loops em listas
for ($i =  0; $i < 7;  $i ++){
    echo $idadeList[$i] .PHP_EOL;
}
*/

for ($i = 0; $i < count($idadeList);  $i ++){
    echo $idadeList[$i] .PHP_EOL;
}

//exibe o tamanho de uma lista
//echo count($idadeList);

for ($contador = 0; $contador < 3; $contador++){
    echo $filmes[$contador] .PHP_EOL;
}

