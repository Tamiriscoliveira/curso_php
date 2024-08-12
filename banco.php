<?php

/*
function adiciona2($x)
{
    return $x + 2;
}

$resultado = adiciona2(10);
echo $resultado;
exit();
*/

//subrotina sem parametro
function exibeOlamundo(){
    echo "Ola mundo" .PHP_EOL;
}

// subrotina com parametro
function exibeMensagem($mensagem)
{
    echo $mensagem .PHP_EOL;
}



$contasCorrentes = [
         '123.456.789-10' => ['titular' => 'Capitã America', 
                         'saldo' => 1000
         ],

         
         '123.456.789-11' =>  ['titular' => 'Mulher Maravilha', 
                           'saldo' => 10000
        ], 


         '123.256.789-10' =>  ['titular' => 'Super Girl', 
                          'saldo' => 300
        ],
];



if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
    exibeMensagem("Você não pode sacar este valor");
} else
    $contasCorrentes['123.456.789-10']['saldo'] -= 500;


if (500 > $contasCorrentes['123.456.789-11']['saldo']) {
    exibeMensagem("Você não pode sacar este valor");
} else
    $contasCorrentes['123.456.789-11']['saldo'] -= 500;

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}


exibeOlamundo();

