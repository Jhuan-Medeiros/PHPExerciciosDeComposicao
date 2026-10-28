<?php

namespace App;
use InvalidArgumentException;

class Produtos 
{
    public function __construct(
        private string $nome,
        private int $preco,
        private int $codigoDeIndentificacao
    ){
        if (trim($nome) == "" or trim($preco) == "" or trim($codigoDeIndentificacao) == "") {
            throw new InvalidArgumentException("Erro na hora de ", 1);
            
        }
    }

    public function getId() : int 
    {
        return $this->codigoDeIndentificacao;
    }

    public function getName() : string
    {
        return $this->nome;
    }

    public function getValue() : float {
        return $this->preco;
    }

    public function getAll() {
        return $this->preco . " " . $this->nome . " ";
    }

}

?>