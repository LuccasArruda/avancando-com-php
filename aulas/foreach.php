<?php
$conta1 = [
    'titular' => 'Luccas',
    'saldo' => 2300
];

$conta2 = [
    'titular' => 'Jeferson',
    'saldo' => 3200
];

$contasCorrente = [
    '123.312.921-31' => $conta1,
    '173.512.021-41' => $conta2
];

$conta3 = ['titular' => 'Geralda', 'saldo' => 1321];
$contasCorrente['123.243.842-45'] = $conta3;

foreach ($contasCorrente as $cpf => $conta) {
    echo $cpf . ' | ' . $conta['titular'] . ' | ' . $conta['saldo'] . PHP_EOL;
}
