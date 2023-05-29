<?php

//Usando método recursivo para mostrar o 5º, 6º e 7º termo de Fibonacci

function fib($n) {
  if ($n == 0)
    {return 0;}
  elseif ($n == 1)
    {return 1;}
  else
    {return fib($n-1) + fib($n-2);}
}

echo "5º termo Fibonacci : ".fib(5)."\n";
echo "6º termo Fibonacci : ".fib(6)."\n";
echo "7º termo Fibonacci : ".fib(7)."\n";
?>