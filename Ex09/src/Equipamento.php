<?php

namespace App;

use InvalidArgumentException;

class Equipamento
{
    public function __construct(
        private string $nome,
        private float $peso,
        private float $valor
    ) {
        if ($this->peso < 0 || $this->valor < 0) {
            throw new InvalidArgumentException("Peso ou valor do equipamento nao podem ser negativos");
        }
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getPeso(): float {
        return $this->peso;
    }

    public function getValor(): float {
        return $this->valor;
    }

    public function getDetalhes(): string {
        return $this->nome . " - Peso: " . $this->peso . " - Valor: " . $this->valor;
    }
}

?>