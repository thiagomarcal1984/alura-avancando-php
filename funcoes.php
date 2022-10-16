<?php

// Subrotina para exibir uma mensagem.
function exibeMensagem(string $mensagem)
{
    echo $mensagem . "<br>" . PHP_EOL;
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

// Repare que o parâmetro $conta é precedido de um ampersand (&).
// Sem isso, o parâmetro é fornecido por valor (cópia).
// Com o ampersand, o parâmetro é fornecido por referência (endereço).
function titularComLetrasMaiusculas(array &$conta) : void
// function titularComLetrasMaiusculas(array $conta) : void
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
    // $conta['saldo'] = 0; // O perigo de se usar parâmetros por referência!
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular . Saldo: $saldo </li>" . PHP_EOL;
}
