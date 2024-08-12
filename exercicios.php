<?php
//1 - Escreva um programa em PHP que exiba seu nome na tela.

echo "Tamiris Coutinho \n ";

//2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.

$nota1 = 5;
$nota2 = 3;
$nota3 = 10;

$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média é " . $media  . "\n";

//3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.

$metros = 5;
$centimetros = $metros * 100;
echo "$metros metros equivalem a $centimetros centímetros. \n";


//4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.

$ano = 2024;
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "$ano é bissexto. \n";
} else {
    echo "$ano não é bissexto. \n";
}


// 5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.

$temperaturaEmCelsius = 30.4; // Modifique esse valor para a temperatura que desejar
$temperaturaEmFahrenheit = $temperaturaEmCelsius * 1.8 + 32;

$mensagem = "A temperatura de $temperaturaEmCelsius Celsius é equivalente a $temperaturaEmFahrenheit Fahrenheit \n";

echo $mensagem;



//1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. 
//Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].

$array = [1, 2, 2, 3, 4, 4, 5];
$semDuplicatas = array_unique($array);


//2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
//Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.

$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];

foreach ($notas as $nota) {
    $resultado = $nota > 6 ? "aprovado" : "reprovado";

    echo "Esse(a) aluno(a) foi $resultado com a nota $nota \n";
}


// 3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.

$conta = [
    'titular' => 'Vinicius Dias',
    'saldo' => 100,
];

echo $conta['titular'] . ' possui ' . $conta['saldo'] . ' reais de saldo.';


//4 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.

$familiares = ['Alice', 'Bob', 'Charlie'];
$familiares[] = 'Davi';
