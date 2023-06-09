<?php

class Titular
{

    private  $cpf;
    private  $nome;

    public function __construct( $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    //------------------------Função para validar nome do titular------------------------//
    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}