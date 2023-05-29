<?php

require_once '7-PHP-ORI-OBJ/src/Conta.php';
require_once '7-PHP-ORI-OBJ/src/Titular.php';
require_once '7-PHP-ORI-OBJ/src/CPF.php';


//----------------------primeira conta-----------------------\\
$alisson = new Titular(new CPF ('440.203.708-50'),'Alisson Leonard');
$primeiraConta = new Conta($alisson);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
var_dump($primeiraConta);
//-----------------------------------------------------------//

//----------------------segunda conta-----------------------\\
$anaclara = new Titular(new CPF('166.049.238-60'), 'Ana Clara');
$segundaConta = new Conta($anaclara);
$segundaConta->deposita(1000);
$segundaConta->saca(200);

echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL;
var_dump($segundaConta);
//-----------------------------------------------------------//

//----------------------terceira conta-----------------------\\
$joyceMassau = new Titular (new CPF('123.456.789-10'), 'Joyce Massau' );
$terceiraConta = new Conta($joyceMassau);
$terceiraConta->deposita(1000);
$terceiraConta->saca(200);

echo $terceiraConta->recuperaNomeTitular() . PHP_EOL;
echo $terceiraConta->recuperaCpfTitular() . PHP_EOL;
echo $terceiraConta->recuperaSaldo() . PHP_EOL;
var_dump($terceiraConta);
//-----------------------------------------------------------//

//unset($segundaConta);

echo 'atualmente nosso banco tem: ' . PHP_EOL;
echo Conta::recupereNumeroDeContas();
echo " Clientes ativos.";





