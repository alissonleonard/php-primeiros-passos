<?php

// gerar sequência de Fibonacci até o 20º termo
$fibonacci = array();
$fibonacci[0] = 0;
$fibonacci[1] = 1;
for ($i = 2; $i <= 20; $i++) {
  $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
}

// mostrar sequência em ordem decrescente
echo "Sequência de Fibonacci em ordem decrescente: " . PHP_EOL;
for ($i = 20; $i >= 0; $i--) {
  echo $fibonacci[$i] . " " . PHP_EOL;
}

// mostrar sequência em ordem crescente
echo "Sequência de Fibonacci em ordem crescente: " . PHP_EOL;
foreach ($fibonacci as $numero) {
  echo $numero . " " . PHP_EOL;
}

?>




