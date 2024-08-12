<?php

// arrays associativo
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

// adicionar um item
$contasCorrentes['123.567.890-90']=[               
                       'titular' => 'Mulher Gato',
                       'saldo' => 2000
            ];

$contasCorrentes['123.569.893-90']=[               
                'titular' => 'Tempestade',
                'saldo' => 2002
     ];

$contasCorrentes['123.557.844-40']=[               
        'titular' => 'Vampira',
        'saldo' => 2004
];    


foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . " - " . $conta['titular'] .PHP_EOL;
}




