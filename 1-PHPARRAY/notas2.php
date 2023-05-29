<?php

// maior para menor
//ksort para ordem das chaves 

$notas = 

[
    'Ana' => 5,
    'Pedro' => 9,
    'João' => 2,
    'Paulo' => 7,
    'Alex' => 4,
];


ksort($notas);
 var_dump($notas);


if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;

}

var_dump (array_is_list($notas));


