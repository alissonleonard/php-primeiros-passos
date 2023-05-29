<?php

//notas de alunos 
$notas = [
    10,
    8,
    9,
    7,
];

//passar valores de $notas para outra variavél guardar o valor e abaixo realizar a organização em ordem maior/menor ou menor/maior
$notasOrdenadas = $notas;
//ordenar valores
sort( $notasOrdenadas);


// VISUALIZAR UM DADO
echo 'Desordenadas:';
var_dump($notas);


//VISUALIZAR UM DADO
echo 'Ordenadas:';
var_dump($notasOrdenadas);
