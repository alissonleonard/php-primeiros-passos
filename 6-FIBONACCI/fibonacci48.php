<?php 

//fibo com ori-obj

class Fibonacci {
    private $sequencia = array();

    public function __construct($n) {
        $this->gerador($n);
    }

    private function gerador($n) {
        $fib = array(0, 1);
        for ($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i-1] + $fib[$i-2];
        }
        $this->sequencia = $fib;
    }

    public function recuperaSequencia() {
        return $this->sequencia;
    }

    public function mostraSequencia() {
        foreach ($this->sequencia as $numero) {
            echo $numero . ', ';
        }
    }
}

$fib = new Fibonacci(10);
$fib->mostraSequencia();