<?php   

    require "funcoes.php"; //lança erro ao encontrar e para a execução do resto do programa
    //require_once "funcoes.php"; //se requisitado novamente, não dá erro ao sobrescrever funções
    //include "funcoes.php"; //mostra erro, mas não para a execução

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

$contasCorrentes['165.691.960-57']['saldo'] = sacar($contasCorrentes['165.691.960-57'], 500);
$contasCorrentes['022.562.040-57']['saldo'] = depositar($contasCorrentes['022.562.040-57'], -500);

unset($contasCorrentes['096.785.020-70']);

titularComLetrasMaiusculas($contasCorrentes['165.691.960-57']);

foreach ($contasCorrentes as $cpf => $conta) {

    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "[$cpf] $titular: $saldo".PHP_EOL;
}