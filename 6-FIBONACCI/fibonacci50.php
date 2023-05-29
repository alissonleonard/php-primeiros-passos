<?php
class Fibonacci {
    private $n;
    private $sequencia;
    
    public function __construct($n) {
        $this->n = $n;
        $this->gerarSequencia();
    }
    
    private function gerarSequencia() {
        // Inicializar as variáveis de Fibonacci
        $num0 = 0;
        $num1 = 1;
        
        // Gerar a sequência Fibonacci e armazenar apenas os números ímpares
        $this->sequencia = array();
        for ($i = 0; $i < $this->n; $i++) {
            // Adicionar o número ímpar atual ao array de sequência
            if ($num1 % 2 == 1) {
                array_push($this->sequencia, $num1);
            }
            
            // Calcular o próximo número Fibonacci
            $num3 = $num0 + $num1;
            $num0 = $num1;
            $num1 = $num3;
        }
    }
    
    public function recuperaSequencia() {
        return $this->sequencia;
    }
}

// Exemplo de uso
$fibonacci = new Fibonacci(10);
$sequencia = $fibonacci->recuperaSequencia();
foreach ($sequencia as $numero) {
    echo $numero . " ";
}
?>
