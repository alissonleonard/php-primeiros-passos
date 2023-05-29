<?php  
//SEQUENCIA DE FIBONACCI ATÉ 15
$n = 0;  
$a = 0;  
$b = 2;  
echo "Sequência de Fibonacci até 15: ";   
echo "$a, $b";  
 
while ($n < 16 )   
{  
  $c = $b + $a;  
  echo ", ";
  echo "$c";
  $a = $b;  
  $b = $c;  
  $n = $n + 1;
}
