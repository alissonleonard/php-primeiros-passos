<?php   
//gerar uma sequência fibonacci utilizando array e e escrever por extenso os números

function fibonacci($n) {
  // Cria um array vazio com tamanho igual ao número de elementos que desejamos na sequência
  $fib = array_fill(0, $n, 0);
  
  // Define os dois primeiros valores da sequência
  $fib[0] = 0;
  $fib[1] = 1;
  
  // Gera os valores restantes da sequência
  for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
  }
  
  // Retorna o array com a sequência completa
  return $fib;
}

// Define o número de elementos que desejamos na sequência
$n = 10;

// Chama a função e armazena o resultado em uma variável
$fibonacci = fibonacci($n);

// Imprime a sequência
echo "Sequência Fibonacci com $n elementos: ";
echo implode(", ", $fibonacci);