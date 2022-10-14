<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-10' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$saque = 500;

if ($contasCorrentes['123.456.789-11']['saldo'] < $saque ) {
    echo "Você não pode sacar um valor maior que o seu saldo." . PHP_EOL;
} else {
    $contasCorrentes['123.456.789-11']['saldo'] -= $saque;
    echo "Valor sacado: " . $saque . PHP_EOL;
}

// Bad smell: repetição de código.
if ($contasCorrentes['123.256.789-10']['saldo'] < $saque ) {
    echo "Você não pode sacar um valor maior que o seu saldo." . PHP_EOL;
} else {
    $contasCorrentes['123.256.789-10']['saldo'] -= $saque;
    echo "Valor sacado: " . $saque . PHP_EOL;
}

foreach ($contasCorrentes as $cpf => $conta) {
    echo "$cpf: " . $conta['titular'] . " " . $conta['saldo'] . PHP_EOL;
}
