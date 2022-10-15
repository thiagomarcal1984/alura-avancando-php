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

