<?php

namespace App;

use InvalidArgumentException;
use Exception;

class Sessao 
{
    private array $ingressos = [];

    public function __construct(
        private string $filme,
        private int $capacidade
    ) {
    }

    public function venderIngresso(Ingresso $ingresso): void {
        if ($ingresso->getPoltrona() < 1 || $ingresso->getPoltrona() > $this->capacidade) {
            throw new InvalidArgumentException("Poltrona invalida. A sessao possui " . $this->capacidade . " poltronas.");
        }

        foreach ($this->ingressos as $atual) {
            if ($atual->getPoltrona() == $ingresso->getPoltrona()) {
                throw new Exception("Poltrona ja ocupada por outro espectador");
            }
        }

        $this->ingressos[] = $ingresso;
    }

    public function consultarOcupadas(): void {
        echo "Poltronas ocupadas no filme " . $this->filme . ":" . PHP_EOL;
        foreach ($this->ingressos as $ingresso) {
            echo $ingresso->getDetalhes() . PHP_EOL;
        }
    }

    public function consultarDisponiveis(): void {
        $livres = $this->capacidade - count($this->ingressos);
        echo "Poltronas livres: " . $livres . PHP_EOL;
    }

    public function calcularArrecadacao(): void {
        $total = 0;
        foreach ($this->ingressos as $ingresso) {
            $total += $ingresso->getValor();
        }
        echo "Arrecadacao total: R$ " . $total . PHP_EOL;
    }
}

?>