<?php

$notas = [
    [
        'aluno' => 'Joyce',
        'nota' => 10,
    ],
    [    
        'aluno' => 'Stella',
        'nota' => 6,
    ],
    [
        'aluno' => 'Alisson',
        'nota' => 9,

    ],
];

function ordenaNotas (array $nota1, array $nota2): int 
{
    return $nota1['nota'] <=> $nota2 ['nota'];
}

//menor para maior
usort($notas, 'ordenaNotas');


var_dump($notas);