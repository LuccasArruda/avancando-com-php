<?php

echo 'Arquivo de funções aqui!'.PHP_EOL;

function sacar(array $conta, int $valorASerSacado)
{
    if ($valorASerSacado > $conta['saldo'])
        return 'O Valor não pode ser sacado, pois excede o máximo da conta!';
    else
        return $conta['saldo'] -= $valorASerSacado;
}

function depositar(array $conta, int $valorASerDepositado)
{
    if ($valorASerDepositado < 0) {
        return 'Não é possível depositar valores negativos!';
    } else {
        return $conta['saldo'] += $valorASerDepositado;
    }
}    

function titularComLetrasMaiusculas(array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);
}