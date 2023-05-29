<?php

//array_key_exists = verifica se a chave existe
//in_array = verifica se o valor existe
//isset = verifica se a chave existe e não é nula

$notas = [

'Vinicius' => null,
'Joyce' => 8,
'Heron' => 10,
'Tom Cavalcanti' => 7,
'João Doria' => 9,
];

krsort($notas);
var_dump($notas);

//verificar se é um array
if (is_array($notas)) {
    echo 'Sim, é um Array' . PHP_EOL;
}
var_dump(array_is_list($notas));

//verificar se algum aluno fez a prova
echo 'Vinicius fez a prova: ' . PHP_EOL;
var_dump(isset($notas ['Vinicius']));

//verificar se alguem atingiu a nota 10
echo "Alguém tirou 10?" . PHP_EOL;
var_dump(in_array(10, $notas, true));


//verificar quem atingiu a nota 10
echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10 , $notas, true));





