<?php

$nome = 'Alisson Leonard';

$MembroDaFamilia = str_contains($nome, 'Leonard');

if ($MembroDaFamilia) {
    echo "$nome é da minha familia" . PHP_EOL;
} else {
    echo "$nome não é da minha familia" . PHP_EOL;

}
   
