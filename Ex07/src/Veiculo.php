<?php

namespace App;

class Veiculo
{
    public function __construct(
        private string $placa,
        private string $proprietario,
        private string $modelo
    ) {
    }

    public function getPlaca(): string {
        return $this->placa;
    }

    public function getDetalhes(): string {
        return $this->placa . " - " . $this->modelo . " - Proprietario(a): " . $this->proprietario;
    }
}

?>