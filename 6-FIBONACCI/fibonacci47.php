<?php 

//Gerar sequência fibonacci utilizando função recursiva 

//A função verifica se o número atual é igual a 0 ou 1 e retorna o valor correspondente. Caso contrário, a função é chamada recursivamente com os dois números anteriores somados. A sequência é gerada chamando a função para cada número na sequência.
function fibonacci($n){
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}


for ($i = 0; $i < 20; $i++) {
    echo fibonacci($i) . ', '; 
}