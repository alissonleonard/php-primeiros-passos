<?php

//gerar uma sequência de Fibonacci em PHP e escrever por extenso os números:
function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

function escrever_numero($num) {
    $unidades = array("zero", "um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove");
    $dezenas = array("dez", "onze", "doze", "treze", "quatorze", "quinze", "dezesseis", "dezessete", "dezoito", "dezenove");
    $dezenas2 = array("", "", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa");
    $centenas = array("cem", "cento", "duzentos", "trezentos", "quatrocentos", "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");

    if ($num < 10) {
        return $unidades[$num];
    } else if ($num < 20) {
        return $dezenas[$num - 10];
    } else if ($num < 100) {
        $dezena = floor($num / 10);
        $unidade = $num % 10;
        $str = $dezenas2[$dezena];
        if ($unidade > 0) {
            $str .= " e " . $unidades[$unidade];
        }
        return $str;
    } else if ($num == 100) {
        return $centenas[0];
    } else if ($num > 100) {
        $centena = floor($num / 100);
        $dezena = floor(($num % 100) / 10);
        $unidade = $num % 10;
        $str = $centenas[$centena];
        if ($dezena > 0) {
            $str .= " e " . $dezenas2[$dezena];
        }
        if ($unidade > 0) {
            $str .= " e " . $unidades[$unidade];
        }
        return $str;
    }
}

for ($i = 0; $i < 10; $i++) {
    $fib = fibonacci($i);
    echo "Sequência de Fibonacci " . ($i+1) . ": " . escrever_numero($fib) . " " . PHP_EOL;
}

?>