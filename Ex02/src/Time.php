<?php
namespace App;

use InvalidArgumentException;

class Time
{
    private array $jogadores = [];

    public function __construct(
        private string $nome
    ) {
        if (trim($nome) == "") {
            throw new InvalidArgumentException("O time tem que ter um nome");
        }
    }

    public function addJogador(Jogador $adicionar): void
    {
        foreach ($this->jogadores as $atual) {
            if ($atual->getCamisa() == $adicionar->getCamisa()) {
                throw new InvalidArgumentException("Não é possível inserir 2 jogadores com o mesmo número");
            }
        }
        $this->jogadores[] = $adicionar;
    }

    public function getEscalacao()
    {
        foreach ($this->jogadores as $value) {
            echo $value->getJogador();
        }
    }

    public function getTotalJogadores(): int
    {
        return count($this->jogadores);
    }

    public function getJogadorCamisa(int $numero)
    {
        foreach ($this->jogadores as $camisa) {
            $numeroAtual = $camisa->getCamisa();
            if ($numero == $numeroAtual) {
                return $camisa;
            }
        }
        return "Jogador não encontrado";
    }

}

?>