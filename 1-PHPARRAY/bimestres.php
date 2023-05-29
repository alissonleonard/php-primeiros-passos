<?php


$notasBM1 = [

'Vinicius' => 6,
'Joyce' => 8,
'Heron' => 10,
'Tom Cavalcanti' => 7,
'João Doria' => 9,
    
];

$notasBM2 = [
'Joyce' => 8,
'Heron' => 9,
'Tom Cavalcanti' => 7,        
];

//array_diff vai retornar um novo array contendo os elementos que existam no primeiro array mas não existem no segundo, entretanto ele só leva o valor em consideração.
//array_diff_key faz a mesma coisa, considerando as chaves
//array_diff_assoc faz associação entre as $
$alunosFaltantes = array_diff_key($notasBM1, $notasBM2,);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

//combinar um valor de um array com outro
var_dump(array_combine($notasAlunos, $nomesAlunos));
//inverte chave com valor
var_dump(array_flip($alunosFaltantes));