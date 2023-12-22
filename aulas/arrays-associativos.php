<?php   
    $conta1 = [
            'titular' => 'Luccas', 
            'saldo' => 2300
        ];
    
    $conta2 = [
            'titular' => 'Jeferson',
            'saldo' => 3200
    ];
    
    $contasCorrente = [$conta1['titular'], $conta2['titular']];

    for ($i = 0; $i < count($contasCorrente); $i++){
        echo $contasCorrente[$i].PHP_EOL;
    }