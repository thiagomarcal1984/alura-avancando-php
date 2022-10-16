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
    // list() serve para declarar e atribuir variáveis a partir de um array.
    /*  Para arrays numéricos, a sintaxe abaixo já bastaria:
            list($titular, $saldo) = $conta;

        Mas como o array $conta é associativo, é necessário relacionar o índice
        à variável:
            list('indice1' => $variavel1, 'indice2' => $variavel2) = $array;
    */
    list('titular' => $titular, 'saldo' => $saldo) = $conta;

    // list() pode ser substituído por colchetes!!!
    ['titular' => $titular, 'saldo' => $saldo] = $conta; 
    exibeMensagem(
        // "$cpf: " . $conta['titular'] . " " . $conta['saldo'] // Sintaxe com concatenações.
        // "$cpf: $conta[titular]  $conta[saldo]" // Sintaxe simples.
        // "$cpf: {$conta['titular']}  {$conta['saldo']}" // Sintaxe complexa, com chaves e aspas simples.
        // '$cpf: {$conta["titular"]}  {$conta["saldo"]}' // Esta sintaxe não funciona.

        "$cpf $titular $saldo"
    );
}

// Mais informações sobre strings complexas:
// Complex (curly) syntax: https://www.php.net/manual/en/language.types.string.php 
