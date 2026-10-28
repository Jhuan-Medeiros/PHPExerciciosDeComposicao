<?php

namespace App;
use Exception;

class Missao 
{
    private string $titulo;
    private string $descricao;
    private int $recompensa;
    private bool $concluida;

    public function __construct(string $titulo, string $descricao, int $recompensa){
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->recompensa = $recompensa;
        $this->concluida = false;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getRecompensa(){
        return $this->recompensa;
    }

    public function isConcluida(){
        return $this->concluida;
    }

    public function concluir(){
        if ($this->concluida) {
            throw new Exception("Missao ja concluida");
        }
        $this->concluida = true;
    }

    public function getDetalhes(){
        $status = $this->concluida ? "Concluida" : "Pendente";
        return $this->titulo . " - " . $this->descricao . " - " . $this->recompensa . " moedas - " . $status;
    }
}

?>