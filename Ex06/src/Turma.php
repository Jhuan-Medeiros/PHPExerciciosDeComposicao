<?php

namespace App;

use InvalidArgumentException;
use LengthException;

class Turma
{

    private array $alunos = [];

    public function __construct(
        private string $identificacao,
        private int $capacidadeTotal
    ){
        if (trim($identificacao) == "" or trim($capacidadeTotal) == "") {
            throw new InvalidArgumentException("Não são aceitos campos vazios");
        }
    }

    public function addAluno(Aluno $aluno){
        foreach ($this->alunos as $atual) {
            if ($atual->getRA() == $aluno->getRA()) {
                throw new InvalidArgumentException("Aluno com RA duplicado");
            }
        }

        if (count($this->alunos) > $this->capacidadeTotal) {
            throw new LengthException("Error Processing Request");
            
        }
        $this->alunos[] = $aluno;
    }

    public function getAlunos() {
        for($i=0; $i < count($this->alunos); $i++) { 
            $alunoAtual = $this->alunos[$i];
            echo $alunoAtual->getNome() . " " . $alunoAtual->getRA() . " " . $alunoAtual->getNota() . PHP_EOL;
        }
    }

    public function getMediaGeral() : float{
        $media = 0;

        foreach ($this->alunos as $alunoAtual) {
            $media+= $alunoAtual->getNota();
        }

        return $media/count($this->alunos);
    }

    public function getAprovados(){
        $aprovados = [];

        foreach ($this->alunos as $alunoAtual) {
            if ($alunoAtual->getNota() > 6.0) {
                $aprovados[] = $alunoAtual; 
            }
        }

        foreach ($aprovados as $alunoAprovado) {
            echo $alunoAprovado->getNome() . " " . $alunoAprovado->getRA() . " " . $alunoAprovado->getNota() . PHP_EOL;
        }
    }

}


?>