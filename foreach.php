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

// // Acréscimo de conta corrente na posição '123.258.852-12' do array associativo:
// $contasCorrentes['123.258.852-12'] = [
//     'titular' => 'Claudia',
//     'saldo' => 2000
// ];

// Acréscimo de conta corrente na última posição do array associativo:
$contasCorrentes[] = [
    'titular' => 'Claudia',
    'saldo' => 2000
    // A chave do array associativo neste objeto será o maior inteiro 
    // disponível no array, no caso zero.
];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

echo PHP_EOL . "Acessando a chave e o valor do array associativo: " . PHP_EOL;
foreach ($contasCorrentes as $cpf => $conta) {
    echo "$cpf: " . $conta['titular'] . PHP_EOL;
}
