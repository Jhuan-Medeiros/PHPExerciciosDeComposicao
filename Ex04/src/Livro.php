<?php

namespace App;
use Exception;

class Livro 
{
    private string $titulo;
    private string $autor;
    private string $isbn;
    private bool $disponivel;

    public function __construct(string $titulo, string $autor, string $isbn){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->disponivel = true;
    }

    public function getIsbn(){
        return $this->isbn;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function isDisponivel(){
        return $this->disponivel;
    }

    public function emprestar(){
        if (!$this->disponivel) {
            throw new Exception("Livro já emprestado");
        }
        $this->disponivel = false;
    }

    public function devolver(){
        if ($this->disponivel) {
            throw new Exception("Livro já devolvido");
        }
        $this->disponivel = true;
    }

    public function getDetalhes(){
        $status = $this->disponivel ? "Disponivel" : "Emprestado";
        return $this->titulo . " - " . $this->autor . " - " . $this->isbn . " - " . $status;
    }
}

?>