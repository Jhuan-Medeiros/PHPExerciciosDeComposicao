<?php

namespace App;

use InvalidArgumentException;

class Acompanhamento 
{
    private array $atividades = [];

    public function __construct(
        private string $disciplina,
        private int $cargaHoraria
    ) {
    }

    public function adicionarAtividade(Atividade $atividade): void {
        foreach ($this->atividades as $atual) {
            if ($atual->getTitulo() == $atividade->getTitulo()) {
                throw new InvalidArgumentException("Atividade com este titulo ja esta cadastrada no acompanhamento");
            }
        }
        $this->atividades[] = $atividade;
    }

    public function registrarNota(string $titulo, float $nota): void {
        foreach ($this->atividades as $atual) {
            if ($atual->getTitulo() == $titulo) {
                $atual->setNota($nota);
                return;
            }
        }
        throw new InvalidArgumentException("Atividade nao encontrada");
    }

    public function calcularDesempenho(): float {
        $somaMaximo = 0;
        $somaNotas = 0;

        foreach ($this->atividades as $atual) {
            $somaMaximo += $atual->getValorMaximo();
            if ($atual->getNota() !== null) {
                $somaNotas += $atual->getNota();
            }
        }

        if ($somaMaximo == 0) {
            return 0.0;
        }

        return $somaNotas / $somaMaximo;
    }

    public function consultarNaoAvaliadas(): void {
        echo "Atividades pendentes em " . $this->disciplina . ":" . PHP_EOL;
        foreach ($this->atividades as $atual) {
            if ($atual->getNota() === null) {
                echo $atual->getDetalhes() . PHP_EOL;
            }
        }
    }

    public function consultarTodas(): void {
        echo "Atividades da disciplina " . $this->disciplina . ":" . PHP_EOL;
        foreach ($this->atividades as $atual) {
            echo $atual->getDetalhes() . PHP_EOL;
        }
    }
}

?>