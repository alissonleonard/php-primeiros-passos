
<?php
// Gera a sequência de fibonacci e mostra quantos itens tem ao todo e o último valor gerado.

function fibonacci ($n) {
    $a = [0,1]; // <<<- começando com o 0 e 1 em array
    
    for ($i = 1; $i < $n; $i++) // <--- repetição de números

    $a[] = $a[$i] + $a[$i - 1]; // <-- adiciona dois números anteriores e joga eles para a matriz.

    print_r($a); // printa o $a

    return $a[$n]; // retorna  o numero para o array

}

echo 'resultado: ' . fibonacci(100) . "\n"; // retorna o valor referente ao que é colocado entre os ()