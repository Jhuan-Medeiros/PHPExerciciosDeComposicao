<?php

namespace App;

use InvalidArgumentException;

class Aluno
{
    public function __construct(
        private string $nome,
        private int $RA,
        private float $nota
    ){
        if (trim($nome) == "" or trim($RA) == "" or trim($nota) == "") {
            throw new InvalidArgumentException("Não são aceitos campos vazios");
        }
        if ($nota > 10 or $nota < 0) {
            throw new InvalidArgumentException("A nota tem que estar entre 0 e 10");
        }
    }

    public function getNota() : float{
        return $this->nota;
    }

    public function getRA() : int{
        return $this->RA;
    }

    public function getNome() : string{
        return $this->nome;
    }
}


?>