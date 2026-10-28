<?php

namespace App;

class Ingresso
{
    public function __construct(
        private string $espectador,
        private int $poltrona,
        private float $valor
    ) {
    }

    public function getEspectador(): string {
        return $this->espectador;
    }

    public function getPoltrona(): int {
        return $this->poltrona;
    }

    public function getValor(): float {
        return $this->valor;
    }

    public function getDetalhes(): string {
        return "Poltrona " . $this->poltrona . " - Espectador(a): " . $this->espectador . " - Valor: R$ " . $this->valor;
    }
}

?>