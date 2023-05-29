<?php

$csv = '.,Alisson Leonard, 24, alisson@alura.com.br.,';
 // só apara laterais, não apare 
 //aparando simbolos selecionados
echo trim ($csv, '.,') . PHP_EOL;
//aparando para a DIREITA
echo ltrim ($csv, '.,') . PHP_EOL;
//aparando para a ESQUERDA
echo rtrim ($csv, '.,') . PHP_EOL;