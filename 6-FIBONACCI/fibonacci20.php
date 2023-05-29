
<?php 
 
//SEQUÊNCIA DE FIBONACCI DE 1 à 100 imprimindo apenas os Pares

$a = 0;
$u = 1;

echo " Sequência de fibonacci de 1 à 100 imprimindo apenas os Pares:  " . PHP_EOL;


while ($u <= 100) {
    $u = $a + $u;
    $a = $u - $a;

    if  ($u % 2 != 1) {
        echo $u . PHP_EOL;


    }

}
