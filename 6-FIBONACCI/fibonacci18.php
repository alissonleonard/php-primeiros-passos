<?php

//Método otimizado para espaço
function fib($n) {
  $a = 0; $b = 1; $c = 0;
  if ($n == 0)
    {return $a;}
  for($i = 2; $i <= $n; $i++) {
    $c = $a + $b;
    $a = $b;
    $b = $c;    
  }
  return $b;
}

echo " 9º termo Fibonacci : ".fib(9)."\n";
echo "10º termo Fibonacci : ".fib(10)."\n";    
echo "11º termo Fibonacci : ".fib(11)."\n";