<?php   

$contasCorrentes = [
    '096.785.020-70' => [
        'titular' => 'Maria',
        'saldo' => 3200
    ],
    
    '022.562.040-57' => [
        'titular' => 'João',
        'saldo' => 5000
    ],
    
    '165.691.960-57' => [
        'titular' => 'Luccas',
        'saldo' => 9000
        ]
    ];
    
function sacar(array $conta, int $valorASerSacado){
    if ($valorASerSacado > $conta['saldo'])
        return 'O Valor não pode ser sacado, pois excede o máximo da conta!';
    else
        return $conta['saldo'] -= $valorASerSacado;
}

function depositar(array $conta, int $valorASerDepositado){
    if ($valorASerDepositado < 0){
        return 'Não é possível depositar valores negativos!';
    }
    else{
        return $conta['saldo'] += $valorASerDepositado;
    }
}

$contasCorrentes['165.691.960-57']['saldo'] = sacar($contasCorrentes['165.691.960-57'], 500);
$contasCorrentes['022.562.040-57']['saldo'] = depositar($contasCorrentes['022.562.040-57'], -500);

foreach ($contasCorrentes as $cpf => $conta) {
    echo "{$conta['titular']}: {$conta['saldo']}".PHP_EOL;
}