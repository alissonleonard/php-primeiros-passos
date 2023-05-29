<?php

 
// gerando e somando os valores da Fibonacci por eles mesmos
//

$a = 0;
$u = 1;
$r = 0;


echo " Sequência de fibonacci de 1 à 2000: ";
echo  $u;

while ($u <= 2000) {
    $u = $a + $u;
    $a = $u - $a;
    $r = $u + $u;

    
    if ($u <=2000) {
        echo ", $u+$u:$r";
    } 
        
}
