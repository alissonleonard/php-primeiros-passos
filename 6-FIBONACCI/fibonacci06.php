<?php
// forma iterativa
// inicializa o primeiro e o segundo números como 0 e 1. Em seguida, imprimimos o primeiro e o segundo números. depois, envia o fluxo para o loop while iterativo, onde  o próximo número adiciona aos dois números anteriores e, simultaneamente, troca o primeiro número pelo segundo e o segundo pelo terceiro.

function Fibonacci($n){
  
    $num1 = 0;
    $num2 = 1;
  
    $counter = 0;
    while ($counter < $n){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}
  
$n = 10;
Fibonacci($n);
