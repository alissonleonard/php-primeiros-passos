<?php

$alunos2022 = [
'Vinicius' ,
'Joyce' ,
'Heron' ,
'Matheus' ,
'Alisson' ,    
];
$novosAlunos = [
'Edmara',
'Bruna',
'Mayra',
'Vitor',
];
//uni arrays
//$alunos2023 = array_merge($alunos2022, $novosAlunos);
$alunos2023  = [...$alunos2022, 'Carlos Vinicius', ...$novosAlunos];

//Adiciona um ou mais elementos no final de um array
array_push($alunos2023, 'Alice', 'Bob', 'Charlie');

$alunos2023[] = 'Luiz';

//Adiciona um ou mais elementos no início de um array
array_unshift($alunos2023, 'Stephane' ,'Rafaela');

//Retira o primeiro elemento de um array
echo array_shift($alunos2022) . PHP_EOL;

//Extrai um elemento do final do array
echo array_pop($alunos2023) . PHP_EOL;

var_dump( $alunos2023);