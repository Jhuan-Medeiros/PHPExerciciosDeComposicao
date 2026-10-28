<?php

namespace App;

use InvalidArgumentException;

class Atividade
{
    private ?float $nota = null;

    public function __construct(
        private string $titulo,
        private float $valorMaximo
    ) {
        if ($this->valorMaximo <= 0) {
            throw new InvalidArgumentException("O valor maximo deve ser maior que zero");
        }
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getValorMaximo(): float {
        return $this->valorMaximo;
    }

    public function getNota(): ?float {
        return $this->nota;
    }

    public function setNota(float $nota): void {
        if ($nota < 0 || $nota > $this->valorMaximo) {
            throw new InvalidArgumentException("Nota invalida. A nota deve estar entre 0 e " . $this->valorMaximo);
        }
        $this->nota = $nota;
    }

    public function getDetalhes(): string {
        $statusNota = $this->nota !== null ? $this->nota : "Nao avaliada";
        return $this->titulo . " - Max: " . $this->valorMaximo . " - Nota: " . $statusNota;
    }
}

?>