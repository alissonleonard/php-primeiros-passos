<?php
//-----------------expressões-------------------\\
//^\w - Localizar a primeira letra do palavra
//[ie] - Localizando qualquer caracter na palavra
//[li]{2} - localizando 2 ( ou mais ) caracteres respectivamente
//(\w+ )(\w*) separar caracteres por grupo
//$dataTransformada = preg_replace('/^([0-9]{4})-([0-9]{2})-([0-9]{2})/', '\3/\2/\1', $data);


$telefones = ['(14) 99806 - 9022', '(14) 99806 - 9554', '(14) 99809 - 1027'];

foreach ($telefones as $telefone) {
    // ESTABELECER O PADRÃO DE TELEFONE
    $regex ='/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/'; 
    $telefoneValido = preg_match(
        $regex, 
        $telefone, 
        $correspondencia
    );

    //VALIDAR TELEFONE
    if ($telefoneValido) {
        echo 'Telefone Válido' . PHP_EOL;
    } else {
        echo 'Telefone Inválido' . PHP_EOL;
    }

//SUBSTITUIR O DDD POR XX
    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
     ) . PHP_EOL;
}