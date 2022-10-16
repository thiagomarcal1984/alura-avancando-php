<?php

// include "funcoes.php"; // A função include dá warning caso não ache o arquivo.
// require "funcoes.php"; // A função require mata o programa caso não ache o arquivo.

/** 
 * Níveis de erro: 
 *  E_WARNING (menos grave)
 *  E_NOTICE (médio), exemplo: acessar um array num índice desconhecido
 *  E_ERROR (mais grave)
 * */ 

// require "funcoes.php";
// require "funcoes.php"; O PHP não permite redefinir as declarações de um require anterior.
require_once "funcoes.php";
require_once "funcoes.php"; // A função require_once pode ser repetida.
// include "funcoes.php";
// include "funcoes.php"; Idem função include: o PHP não permite redefinir as declarações.

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

titularComLetrasMaiusculas($contasCorrentes['123.256.789-10']);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        // "$cpf: " . $conta['titular'] . " " . $conta['saldo'] // Sintaxe com concatenações.
        // "$cpf: $conta[titular]  $conta[saldo]" // Sintaxe simples.
        "$cpf: {$conta['titular']}  {$conta['saldo']}" // Sintaxe complexa, com chaves e aspas simples.
        // '$cpf: {$conta["titular"]}  {$conta["saldo"]}' // Esta sintaxe não funciona.
    );
}

// Mais informações sobre strings complexas:
// Complex (curly) syntax: https://www.php.net/manual/en/language.types.string.php 
