
<?php 
 
//SEQUÊNCIA DE FIBONACCI DE 1 à 100 imprimindo apenas os Impares

$a = 0;
$u = 1;


//echo " Sequência de fibonacci de 1 à 100 imprimindo apenas os Impares:  " . PHP_EOL;


while ($u <= 100) {
    $u = $a + $u;
    $a = $u - $a;

    if  ($u % 2 != 0) {
        // echo $u . PHP_EOL;


    }

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci22</title>
</head>
<body>
    
<h1>Fibonacci22</h1>

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