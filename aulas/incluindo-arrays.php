<?php
    $idades = [32,23,65,87,56];

    $idades[count($idades)] = 37;

    foreach ($idades as $idade){
        echo $idade.PHP_EOL;
    }