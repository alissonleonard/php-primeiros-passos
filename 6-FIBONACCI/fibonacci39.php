<?php
function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

for ($i = 0; $i < 10; $i++) {
    $fib = fibonacci($i);
    $tabuada = $fib * 5;
    echo "Sequência de Fibonacci " . ($i+1) . ": " . $fib . " (Tabuada do 5: " . $tabuada . ")" . PHP_EOL;
}
?>