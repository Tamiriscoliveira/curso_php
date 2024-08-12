<?php

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
];

foreach ($array as $item){
    echo $item .PHP_EOL;
}

// tabela de conversões de tipos https://www.php.net/manual/pt_BR/language.types.array.php