<?php
// Subrotina para exibir uma mensagem.
function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

// Subrotina para saque de valores de uma conta.
function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar um valor maior que o seu saldo.");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta; // PHP passa parâmetros por valor, não por referência.
}

function depositar(array $conta, float $deposito) : array
{
    if ($deposito > 0) {
        $conta['saldo'] += $deposito;
    } else {
        exibeMensagem("Depósitos precisam ser positivos.");
    }
    return $conta;
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
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 900);

// A linha abaixo vai causar um erro, porque o saque deve ser float, não string:
// $contasCorrentes['123.256.789-10'] = sacar($contasCorrentes['123.256.789-10'], 'dinheiro');

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf: " . $conta['titular'] . " " . $conta['saldo']);
}
