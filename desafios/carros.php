<?php
    $carros = [
        'ODP-3241' => [
            'marca' => 'Volkswagen',
            'modelo' => 'Fox',
            'ano' => 2009
        ],
        
        'USA-1922' => [
            'marca' => 'Chevrolet',
            'modelo' => 'Prisma',
            'ano' => 2009
        ]
    ];

    foreach ($carros as $placa => $carro){
        echo 'Placa: ' . $placa . ' Modelo: ' . $carro['modelo'] . ' Marca: ' . $carro['marca'] . ' ano: ' . $carro['ano'] . PHP_EOL;
    }