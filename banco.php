<?php
// Subrotina para exibir uma mensagem.
function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

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
    exibeMensagem("Você não pode sacar um valor maior que o seu saldo.");
} else {
    $contasCorrentes['123.456.789-11']['saldo'] -= $saque;
    exibeMensagem("Valor sacado: " . $saque);
}

// Bad smell: repetição de código.
if ($contasCorrentes['123.256.789-10']['saldo'] < $saque ) {
    exibeMensagem("Você não pode sacar um valor maior que o seu saldo.");
} else {
    $contasCorrentes['123.256.789-10']['saldo'] -= $saque;
    exibeMensagem("Valor sacado: " . $saque);
}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf: " . $conta['titular'] . " " . $conta['saldo']);
}
