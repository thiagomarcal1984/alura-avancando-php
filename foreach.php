<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12325678910 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

echo PHP_EOL . "Acessando a chave e o valor do array associativo: " . PHP_EOL;
foreach ($contasCorrentes as $cpf => $conta) {
    echo "$cpf: " . $conta['titular'] . PHP_EOL;
}
