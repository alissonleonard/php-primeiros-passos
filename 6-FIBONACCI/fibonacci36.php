<?php

//Gerar sequencia Fibonacci em php até 100 mostrando os números Pares e Impares 
function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$i = 0;
while (true) {
    $fib = fibonacci($i);
    if ($fib > 100) {
        break;
    }
    if ($fib % 2 == 0) {
        echo $fib . " (Par) ". PHP_EOL;
    } else {
        echo $fib . " (Ímpar) " . PHP_EOL;
    }
    $i++;
}
?>