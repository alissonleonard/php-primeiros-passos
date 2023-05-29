<?php

 
// 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

$a = 0;
$u = 1;



echo " Sequência de fibonacci de 1 à 2000: ";
echo  $u;

while ($u <= 2000) {
    $u = $a + $u;
    $a = $u - $a;

    
    if ($u <=2000) {
        echo ", $u ";
    } 
        
}


