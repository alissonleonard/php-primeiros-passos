<?php

//Gerar sequencia Fibonacci até 3000 somando o valor ao ano atual em que estamos

function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$current_year = date("Y"); // obtendo o ano atual

$i = 0;
while (true) {
    $fib = fibonacci($i);
    if ($fib > 3000) {
        break;
    }
    echo "Sequência de Fibonacci " . ($i+1) . ": " . $fib . " (Ano: " . ($current_year + $fib) . ")" . PHP_EOL;
    $i++;
}
?>
