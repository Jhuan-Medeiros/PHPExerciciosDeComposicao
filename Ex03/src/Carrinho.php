<?php

namespace App;
use InvalidArgumentException;

class Carrinho 
{
    private array $buying = [];
    public function __construct(){
    }

    public function adicionarProduto(Produtos $produto) : void {
        foreach ($this->buying as $atual) {
            if ($produto->getId() == $atual->getId()) {
                throw new InvalidArgumentException("Item já no carrinho");
            }
        }
        $this->buying[] = $produto;
    }

    public function getCarrinho()
    {
        $total = 0;
        echo "No carrinho: ";
        foreach ($this->buying as $carrinho) {
            echo $carrinho->getAll() . PHP_EOL;
            $total =+ $carrinho->getValue();
        }
        echo "total da compra: " . $total . PHP_EOL;
    }

    public function removerProduto(string $nome){
        foreach ($this->buying as $key => $atual) {
            if ($atual->getName() == $nome) {
                unset($this->buying[$key]);
            }
        }
    }


}


?>