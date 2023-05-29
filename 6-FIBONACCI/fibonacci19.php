<?php
//calculado como potência da matriz
function fib($n) {
  $initial = array(array(1,1),array(1,0));
  $Final = array(array(1,1),array(1,0));

  if ($n == 0)
    {return 0;}
  else {      
    for($i = 1; $i < $n ; $i++) {
      $a = $Final[0][0]*$initial[0][0] + $Final[0][1]*$initial[1][0];
      $b = $Final[1][0]*$initial[0][0] + $Final[1][1]*$initial[1][0];
      $c = $Final[0][0]*$initial[0][1] + $Final[0][1]*$initial[1][1];
      $d = $Final[1][0]*$initial[0][1] + $Final[1][1]*$initial[1][1];
      $Final[0][0] = $a;
      $Final[1][0] = $b;
      $Final[0][1] = $c;
      $Final[1][1] = $d;           
    }
  }
  return $Final[0][1];
}

echo "10º Termo Fibonacci : ".fib(10)."\n";    
echo "11º Termo Fibonacci  : ".fib(11)."\n";
echo "12º Termo Fibonacci  : ".fib(12)."\n";