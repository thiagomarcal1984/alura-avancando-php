<?php

// Arrays associativos são diferentes de Arrays indexados.
// A chave dos arrays indexados é um número inteiro;
// A chave dos arrays associativos é uma string.

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];
$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

$contasCorrentes = [
    $conta1,
    $conta2,
    $conta3
];

var_dump($conta1[0]); // Resultado: NULL, porque $conta é um array associativo.

var_dump($contasCorrentes);

echo PHP_EOL . "Exibindo os titulares das contas corrente:" .  PHP_EOL;
for ($i=0; $i < count($contasCorrentes); $i++) { 
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
