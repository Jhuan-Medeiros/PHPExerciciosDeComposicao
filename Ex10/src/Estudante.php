<?php

namespace App;

class Estudante
{
    private ?Acompanhamento $acompanhamento = null;

    public function __construct(
        private string $nome,
        private string $ra
    ) {
    }

    public function registrarAcompanhamento(Acompanhamento $acompanhamento): void {
        $this->acompanhamento = $acompanhamento;
    }

    public function getAcompanhamento(): ?Acompanhamento {
        return $this->acompanhamento;
    }

    public function consultarDesempenho(): void {
        if ($this->acompanhamento === null) {
            echo "Estudante sem acompanhamento registrado." . PHP_EOL;
            return;
        }
        $razao = $this->acompanhamento->calcularDesempenho();
        $porcentagem = $razao * 100;
        echo "Desempenho de " . $this->nome . " (RA: " . $this->ra . "): " . $porcentagem . "%" . PHP_EOL;
    }
}

?>