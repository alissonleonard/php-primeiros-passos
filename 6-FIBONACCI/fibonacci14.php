<?php
//SOMA DOS NÚMEROS DE FIBONACCI EM ÍNDICES PARES ATÉ N TERMOS

function calculateEvenSum($n)
{
    if ($n <= 0)
        return 0;
 
    $fibo[2 * $n + 1] = array();
    $fibo[0] = 0; $fibo[1] = 1;
 
  
    $sum = 0;
 
    for ($i = 2; $i <= 2 * $n; $i++)
    {
        $fibo[$i] = $fibo[$i - 1] +
                    $fibo[$i - 2];
 
     
        if ($i % 2 == 0)
            $sum += $fibo[$i];
    }
    return $sum;
}
 

$n = 10;
 
echo "Soma dos números de fibonacci em índices pares em " . $n .
     " terms: " . calculateEvenSum($n) . "\n";