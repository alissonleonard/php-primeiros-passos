<?php

//sequência em fibonacci que mostre apenas os números divisores de 5
function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

for ($i = 0; $i < 20; $i++) {
    $fib = fibonacci($i);
    if ($fib % 5 == 0) {
        echo $fib . PHP_EOL;
    }
}
?>
