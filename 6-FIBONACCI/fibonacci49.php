<?php

//GERAR FIBO COM PHP ORI-OBJ imprimindo os números por extenso

class Fibonacci {
    private $sequencia = array();

    private $palavras = array(
        'zero', 'um', 'dois', 'três', 'quatro', 'cinco',
        'seis', 'sete', 'oito', 'nove', 'dez',
        'onze', 'doze', 'treze', 'catorze', 'quinze',
        'dezesseis', 'dezessete', 'dezoito', 'dezenove'
    );

    private $dezenas = array(
        '', '', 'vinte', 'trinta', 'quarenta',
        'cinquenta', 'sessenta', 'setenta', 'oitenta', 'noventa'
    );

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

    private function NumPorExt($num) {
        if ($num < 20) {
            return $this->palavras[$num];
        }
        if ($num < 100) {
            return $this->dezenas[floor($num/10)] . ' ' . $this->palavras[$num%10];
        }
        if ($num < 1000) {
            return $this->palavras[floor($num/100)] . 'cento e ' . $this->NumPorExt($num%100);
        }
    }

    public function mostrarSequencia() {
        foreach ($this->sequencia as $numero) {
            echo $this->NumPorExt($numero) . ', ';
        }
    }
}

$fib = new Fibonacci(10);
$fib->mostrarSequencia(); 
