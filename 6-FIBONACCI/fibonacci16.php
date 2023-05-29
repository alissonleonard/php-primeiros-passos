<?php

function fib($n) {

// criando array que contém os termos de Fibonacci
//calcula um termo específico da sequência apenas uma vez

$f = array();
$f[0] = 0;
$f[1] = 1;
  
for($i = 2; $i <= $n ; $i++) {
    $f[$i] = $f[$i-1] + $f[$i-2];
  }
  return $f[$n];
}

echo "6º termo de Fibonacci : ".fib(6)."\n";
echo "7º termo de Fibonacci : ".fib(7)."\n";
echo "8º termo de Fibonacci : ".fib(8)."\n";
