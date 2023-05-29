<?php

//Gerar uma sequência de Fibonacci em PHP que mostre apenas os números divisíveis por 6 até o número 100:
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
    if ($fib % 3 == 0) {
        echo $fib . PHP_EOL;
    }
    $i++;
}
?>