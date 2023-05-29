<?php

 
// gerando e multiplicando os valores por eles mesmo
//

$a = 0;
$u = 1;
$r = 0;
$s = $r;
$t = 0;


echo " Sequência de fibonacci de 1 à 2000: " . PHP_EOL;
echo  $u;

while ($u <= 2000) {
    $u = $a + $u;
    $a = $u - $a;
    $r = $u * $u;
    $s = $r + $r;
      
    
 
    if ($u <=2000) {
        echo " $u x $u: $r" . PHP_EOL;
        echo "somando um total de: $s" . PHP_EOL;
        

    } 
        
}