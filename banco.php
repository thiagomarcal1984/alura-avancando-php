<?php
// Subrotina para exibir uma mensagem.
function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

// Subrotina para saque de valores de uma conta.
function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar um valor maior que o seu saldo.");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta; // PHP passa parâmetros por valor, não por referência.
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

$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], $saque);
$contasCorrentes['123.256.789-10'] = sacar($contasCorrentes['123.256.789-10'], $saque);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf: " . $conta['titular'] . " " . $conta['saldo']);
}
