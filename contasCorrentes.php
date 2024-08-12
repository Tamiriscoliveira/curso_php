<?php

// arrays associativos
$conta1 = ['titular' => 'Capitã America', 
           'saldo' => 1000
          ];

$conta2 = ['titular' => 'Mulher Maravilha', 
          'saldo' => 10000
         ];

$conta3 = ['titular' => 'Super Girl', 
           'saldo' => 300
          ];

$contasCorrentes = [$conta1, $conta2, $conta3];

//echo $conta1['titular'] .PHP_EOL;

for ($i = 0;$i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] .PHP_EOL;
}