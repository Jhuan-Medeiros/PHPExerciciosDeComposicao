<?php

namespace App;

use InvalidArgumentException;
use Exception;

class Estacionamento 
{
    private array $vagas = [];

    public function __construct(
        private int $limite
    ) {
    }

    public function entrar(Veiculo $veiculo): void {
        if (count($this->vagas) >= $this->limite) {
            throw new Exception("Estacionamento lotado");
        }

        foreach ($this->vagas as $atual) {
            if ($atual->getPlaca() == $veiculo->getPlaca()) {
                throw new InvalidArgumentException("Veiculo com esta placa ja esta no estacionamento");
            }
        }

        $this->vagas[] = $veiculo;
    }

    public function sair(string $placa): void {
        foreach ($this->vagas as $key => $atual) {
            if ($atual->getPlaca() == $placa) {
                unset($this->vagas[$key]);
                // Reindexa o array para não deixar buracos nas chaves
                $this->vagas = array_values($this->vagas);
                return;
            }
        }
        throw new InvalidArgumentException("Veiculo nao encontrado para saida");
    }

    public function localizar(string $placa): void {
        foreach ($this->vagas as $atual) {
            if ($atual->getPlaca() == $placa) {
                echo "Localizado: " . $atual->getDetalhes() . PHP_EOL;
                return;
            }
        }
        throw new InvalidArgumentException("Veiculo nao localizado no estacionamento");
    }

    public function consultarVagasLivres(): void {
        $livres = $this->limite - count($this->vagas);
        echo "Vagas livres: " . $livres . PHP_EOL;
    }
}

?>