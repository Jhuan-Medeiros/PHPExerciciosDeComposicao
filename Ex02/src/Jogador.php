<?php
namespace App;

use InvalidArgumentException;

class Jogador
{
    public function __construct(
        private int $camisa,
        private string $nome,
        private string $posicao
    ){
        if (trim($camisa) == "" or trim($nome) == "" or trim($posicao) == "") {
            throw new InvalidArgumentException("Não podem existir valores sem dados");
            
        }
    }

    public function getCamisa() : int {
        return $this->camisa;
    }

    public function getJogador(){
        return $this->nome . " " . $this->posicao . " " . $this->camisa . " ";
    }

}
?>