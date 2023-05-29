<?php

$conta1 = [
    'titular' => 'Alisson',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Monark',
    'saldo' => 10000
];
$conta3 = [
    'titular' => 'Thais Karla',
    'saldo' => 100
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ( $i =0; $i < count ($contasCorrentes); $i++) {
    echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
}
