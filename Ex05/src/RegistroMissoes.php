<?php

namespace App;
use InvalidArgumentException;

class RegistroMissoes 
{
    private array $missoes = [];
    
    public function __construct(){
    }

    public function adicionarMissao(Missao $missao) : void {
        $this->missoes[] = $missao;
    }

    public function consultarMissoes()
    {
        echo "Todas as missoes: " . PHP_EOL;
        foreach ($this->missoes as $missao) {
            echo $missao->getDetalhes() . PHP_EOL;
        }
    }

    public function consultarPendentes()
    {
        echo "Missoes pendentes: " . PHP_EOL;
        foreach ($this->missoes as $missao) {
            if (!$missao->isConcluida()) {
                echo $missao->getDetalhes() . PHP_EOL;
            }
        }
    }

    public function calcularRecompensas(){
        $total = 0;
        foreach ($this->missoes as $missao) {
            if ($missao->isConcluida()) {
                $total += $missao->getRecompensa();
            }
        }
        echo "Total de moedas arrecadadas: " . $total . PHP_EOL;
    }

    public function concluirMissao(string $titulo){
        foreach ($this->missoes as $missao) {
            if ($missao->getTitulo() == $titulo) {
                $missao->concluir();
                return;
            }
        }
        throw new InvalidArgumentException("Missao nao encontrada");
    }
}

?>