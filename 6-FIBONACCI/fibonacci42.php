<?php

//gerar uma sequência de Fibonacci em PHP e exibir cada termo junto com um valor calculado através de uma regra de 3:

function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$valor1 = 10;
$valor2 = 50;
$min = PHP_INT_MAX;
$max = PHP_INT_MIN;

for ($i = 0; $i < 10; $i++) {
    $fib = fibonacci($i);
    $valor_regra3 = ($fib - 0) / (fibonacci(9) - 0) * ($valor2 - $valor1) + $valor1;
    echo "Sequência de Fibonacci " . ($i+1) . ": " . $fib . " (Valor pela regra de 3: " . $valor_regra3 . ")" .PHP_EOL;
}

?>
