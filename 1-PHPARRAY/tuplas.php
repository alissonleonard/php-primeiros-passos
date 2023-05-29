<?php


//estabeleceu os dados
$dados = [
    'nome' => 'Alisson', 
    'nota' => 10, 
    'idade' => 24,
];

//jogou os dados de $ para ''
//['nome' => $nome,'nota' => $nota, 'idade' => $idade] = $dados;


//Importa variáveis para a tabela de símbolos a partir de um array
extract ($dados);

var_dump ($nome, $nota, $idade);

//Cria um array contendo variáveis e seus valores.
var_dump(compact('nome', 'nota' , 'idade'));

