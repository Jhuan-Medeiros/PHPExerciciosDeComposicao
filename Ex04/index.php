<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Biblioteca;
use App\Livro;

$livro = new Livro("Teste", "Teste do autor", "111");
$biblioteca = new Biblioteca();

$biblioteca->cadastrarLivro($livro);
$biblioteca->consultarCatalogo();

$biblioteca->emprestar("111");
$biblioteca->consultarCatalogo();

$biblioteca->devolver("111");
$biblioteca->consultarCatalogo();

$livroDuplicado = new Livro("Blebleble", "Robert Deniro", "111");
$biblioteca->cadastrarLivro($livroDuplicado);

?>