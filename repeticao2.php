<?php

for ($contador = 1; $contador <=15; $contador= $contador + 1){
  if ($contador == 13){
      continue; // ele continua mesmo não tendo o valor especificado
      //break; //ele para a execução
    }
    echo "#$contador" . PHP_EOL;
}