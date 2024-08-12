<?php

$idade = 34;
// $nome = 'Tamiris';

echo "Entrada permitida apenas para pessoas acima de 18 anos." . PHP_EOL;
 
// if ($idade == 18 || $idade > 18) { // pode usar or, >=
//   echo "Você tem $idade anos." . PHP_EOL;
//    echo "Pode Entrar" . PHP_EOL;
//}

// if ($idade >= 18 && $nome == 'Tamiris') {  //and &&
     //     echo "Você tem $idade anos." . PHP_EOL;
//    echo "Pode Entrar" . PHP_EOL;
//}

if ($idade >= 18) { // pode usar or, >=
    echo "Você tem $idade anos." . PHP_EOL;
     echo "Pode Entrar" . PHP_EOL;
 }else{
     echo "Você só tem $idade anos. Você não pode entrar";
 }

 echo PHP_EOL;
 echo "Adeus!";
