<?php

//Gerar uma Sequência Fibonacci e realiza a formula de bhaskara com os valores da mesma

function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

function bhaskara($a, $b, $c) {
    $delta = pow($b, 2) - (4 * $a * $c);
    if ($delta < 0) {
        return null;
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return array($x1, $x2);
    }
}

for ($i = 0; $i < 10; $i++) {
    $fib = fibonacci($i);
    $bhaskara = bhaskara(1, -$fib, $fib);
    echo "Sequência de Fibonacci " . ($i+1) . ": " . $fib;
    if ($bhaskara != null) {
        echo " (Raízes de Bhaskara: " . $bhaskara[0] . ", " . $bhaskara[1] . ")";
    }
    echo " " . PHP_EOL;
}
?>