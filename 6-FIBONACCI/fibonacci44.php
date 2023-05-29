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

function escreve_numero($num) {
    $units = array("zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine");
    $teens = array("ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen");
    $tens = array("", "", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety");

    if ($num < 10) {
        return $units[$num];
    } else if ($num < 20) {
        return $teens[$num - 10];
    } else if ($num < 100) {
        $ten = floor($num / 10);
        $unit = $num % 10;
        $str = $tens[$ten];
        
        if ($unit > 0) {
            $str .= "-" . $units[$unit];
        }       
        return $str;
    } else if ($num == 100) {
        return "one hundred";
    } else if ($num > 100) {
        $hundred = floor($num / 100);
        $ten = floor(($num % 100) / 10);
        $unit = $num % 10;
        $str = $units[$hundred] . " hundred";
        if ($ten > 0) {
            $str .= " and " . $tens[$ten];
        }
        if ($unit > 0) {
            $str .= "-" . $units[$unit];
        }
        return $str;
    }
}

for ($i = 0; $i < 10; $i++) {
    $fib = fibonacci($i);
    echo "Fibonacci Sequence " . ($i+1) . ": " . escreve_numero($fib) . " " . PHP_EOL;
}

?>
