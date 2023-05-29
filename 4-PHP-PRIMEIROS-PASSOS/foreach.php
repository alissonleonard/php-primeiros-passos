<?php

$contasCorrentes = [
   '440.203.708.50' => [
    'titular' => 'Alisson',
    'saldo' => 1000
   ],
   '441.203.708.51' => [
    'titular' => 'Monark',
    'saldo' => 10000
   ],
   '442.203.708.52' => [    
    'titular' => 'Thais Karla',
    'saldo' => 100
   ]
];

$contasCorrentes['442.203.708.53'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta[ 'titular'] . PHP_EOL; 
}