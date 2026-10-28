<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Carrinho;
use App\Pergunta;
use App\Produtos;

$produto = new Produtos("teste", 10, 1);

$carrinho = new Carrinho();

$carrinho->adicionarProduto($produto);

$carrinho->getCarrinho();
$carrinho->removerProduto("teste");
$carrinho->getCarrinho();

$produto = new Produtos("teste", 10, 1);
$carrinho->adicionarProduto($produto);
$carrinho->adicionarProduto($produto);


?>