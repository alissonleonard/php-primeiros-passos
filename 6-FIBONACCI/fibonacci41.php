<?php

//gerar uma sequência de Fibonacci em PHP que mostre o maior e menor número

function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$min = PHP_INT_MAX;
$max = PHP_INT_MIN;

for ($i = 0; $i < 10; $i++) {
    $fib = fibonacci($i);
    if ($fib < $min) {
        $min = $fib;
    }
    if ($fib > $max) {
        $max = $fib;
    }
    echo "Sequência de Fibonacci " . ($i+1) . ": " . $fib . " ";
}

echo "Menor número: " . $min . "" . PHP_EOL;
echo "Maior número: " . $max . "" . PHP_EOL;
?>