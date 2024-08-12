<?php

$idade = 15;
$acompanhante = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou " . PHP_EOL;
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} elseif ($idade >= 15 and $acompanhante > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
}

echo PHP_EOL;
echo "Adeus!";