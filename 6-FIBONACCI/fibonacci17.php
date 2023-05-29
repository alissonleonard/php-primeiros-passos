<?php

//Operador Ternário
//Uma condição é avaliada, e se ela for verdadeira, atribui-se um valor, e se for falsa, atribui-se outro valor

function fib($n) {
  $y = ($n == 0)? 0 : (($n == 1) ? 1 : fib($n-1) + fib($n-2));
  return $y;
}

echo "8º termo Fibonacci : ".fib(8)."\n";
echo "9º termo Fibonacci : ".fib(9)."\n";
echo "10º termo Fibonacci : ".fib(10)."\n"; 
