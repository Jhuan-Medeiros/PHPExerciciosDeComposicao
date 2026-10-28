<?php

namespace App;

use InvalidArgumentException;
use Exception;

class Aventureiro 
{
    private array $mochila = [];

    public function __construct(
        private string $nome,
        private int $pontosVida,
        private float $capacidadeMochila
    ) {
    }

    public function coletar(Equipamento $equipamento): void {
        if ($this->getPesoOcupado() + $equipamento->getPeso() > $this->capacidadeMochila) {
            throw new Exception("Capacidade maxima da mochila excedida");
        }

        $this->mochila[] = $equipamento;
    }

    public function descartar(string $nomeEquipamento): void {
        foreach ($this->mochila as $key => $atual) {
            if ($atual->getNome() == $nomeEquipamento) {
                unset($this->mochila[$key]);
                $this->mochila = array_values($this->mochila);
                return;
            }
        }
        throw new InvalidArgumentException("Equipamento nao encontrado na mochila");
    }

    public function getPesoOcupado(): float {
        $peso = 0;
        foreach ($this->mochila as $equipamento) {
            $peso += $equipamento->getPeso();
        }
        return $peso;
    }

    public function getEspacoRestante(): float {
        return $this->capacidadeMochila - $this->getPesoOcupado();
    }

    public function getValorTotal(): float {
        $valor = 0;
        foreach ($this->mochila as $equipamento) {
            $valor += $equipamento->getValor();
        }
        return $valor;
    }

    public function consultarMochila(): void {
        echo "Mochila de " . $this->nome . " (HP: " . $this->pontosVida . "):" . PHP_EOL;
        foreach ($this->mochila as $equipamento) {
            echo $equipamento->getDetalhes() . PHP_EOL;
        }
        echo "Peso ocupado: " . $this->getPesoOcupado() . PHP_EOL;
        echo "Espaco restante: " . $this->getEspacoRestante() . PHP_EOL;
        echo "Valor total: " . $this->getValorTotal() . " moedas" . PHP_EOL;
    }
}

?>