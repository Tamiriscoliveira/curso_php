<?php
//um programa que exibe todos os numeros impars até 100
// resto da divisão por dois for igual a 0 e par 

for ($contador = 1; $contador < 100; $contador ++){
  if ($contador %2 != 0){
     echo "#$contador" . PHP_EOL;
  }
}

