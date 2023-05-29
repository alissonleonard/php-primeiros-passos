
<?php 
 
//SEQUÊNCIA DE FIBONACCI DE 1 à 100 imprimindo apenas os Impares

$a = 0;
$u = 1;


echo " Sequência de fibonacci de 1 à 100 imprimindo apenas os Impares:  " . PHP_EOL;


while ($u <= 100) {
    $u = $a + $u;
    $a = $u - $a;

    if  ($u % 2 != 0) {
        echo $u . PHP_EOL;


    }

}
