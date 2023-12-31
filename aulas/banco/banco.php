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

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
        <h1 class="bg-danger text-light ps-4 p-3">Contas Correntes</h1>
    <div class="container">
        <dl>
            <?foreach($contasCorrentes as $cpf => $conta){?>
            <dt><h3><?echo $conta['titular']?></h3></dt>
            <dd><?echo $conta['saldo']?></dd>
            <?}?>
        </dl>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>