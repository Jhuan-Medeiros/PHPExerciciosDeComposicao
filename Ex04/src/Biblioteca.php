<?php

namespace App;
use InvalidArgumentException;

class Biblioteca 
{
    private array $catalogo = [];
    
    public function __construct(){
    }

    public function cadastrarLivro(Livro $novoLivro) : void {
        foreach ($this->catalogo as $livroExistente) {
            if ($novoLivro->getIsbn() == $livroExistente->getIsbn()) {
                throw new InvalidArgumentException("Livro já cadastrado");
            }
        }
        $this->catalogo[] = $novoLivro;
    }

    public function consultarCatalogo()
    {
        echo "No catalogo: " . PHP_EOL;
        foreach ($this->catalogo as $livro) {
            echo $livro->getDetalhes() . PHP_EOL;
        }
    }

    public function emprestar(string $isbn){
        foreach ($this->catalogo as $livro) {
            if ($livro->getIsbn() == $isbn) {
                $livro->emprestar();
                return;
            }
        }
        throw new InvalidArgumentException("Livro não encontrado");
    }

    public function devolver(string $isbn){
        foreach ($this->catalogo as $livro) {
            if ($livro->getIsbn() == $isbn) {
                $livro->devolver();
                return;
            }
        }
        throw new InvalidArgumentException("Livro não encontrado");
    }
}

?>