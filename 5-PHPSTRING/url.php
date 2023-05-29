<?php

//identificar se o site é seguro ou não.

$url = 'https://arudin.com.br';

if (str_starts_with($url, 'https')) {
    echo 'É uma URL segura';
} else {
    echo 'Não é uma URL segura';

}

echo PHP_EOL;

// se é de domínio brasileiro ou não.
if (str_ends_with($url, '.br')) { 
    echo 'É um domínio do Brasil';
} else {
    echo 'Não é um domínio do Brasil';

}

echo PHP_EOL;

