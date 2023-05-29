<?php 
 
// 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

$a = 0;
$u = 1;
$x = 0;



echo " Sequência de fibonacci de 1 à 100 elevados a ³: " . PHP_EOL;
echo  $u;


while ($u <= 100) {
    $u = $a + $u;
    $a = $u - $a;
    $x = $u ** 3;

    
    
    if ($u <=100) { 
        echo " $u a ³: $x " . PHP_EOL;
       
    } 
        
}

