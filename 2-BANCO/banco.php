<?php

//chamando arquivo
require_once ('funcoes.php');
//end





//contas correntes ativas
$contasCorrentes = [
        '440.203.708.50' => [
        'titular' => 'Alisson',
        'saldo' => 10000
        ],
        '166.049.238.60' => [
        'titular' => 'João',
        'saldo' => 1000
        ],
        '507.082.034.40' => [    
        'titular' => 'Maria',
        'saldo' => 1000
        ]
 ];
 //end

//solicitações de saque/deposito
$contasCorrentes['440.203.708.50'] = sacar($contasCorrentes['440.203.708.50'], 500);

$contasCorrentes['166.049.238.60'] = sacar($contasCorrentes['166.049.238.60'], 500);

$contasCorrentes['440.203.708.50'] = depositar($contasCorrentes['440.203.708.50'], 500);
//end

//--excluir qualquer variavel--//~

//unset ($contasCorrentes ['166.049.238.60']);
//unset ($contasCorrentes ['507.082.034.40']);

//end


//letra maíuscula
//TCLM($contasCorrentes['440.203.708.50']);
//end


//echo "<ul>";

//foreach ($contasCorrentes as $cpf => $conta) {
    //exibeConta($conta);
   

//}
//echo "</ul>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas Correntes</title>
</head>
<body>
    
<h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3
            ></dt>
        <dd>
            Saldo: <?= $conta ['saldo']; ?>
        </dd>
    <?php } ?>
    </dl>




</body>
</html>