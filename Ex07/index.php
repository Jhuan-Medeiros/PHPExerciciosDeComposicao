<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Estacionamento;
use App\Veiculo;

$estacionamento = new Estacionamento(2);

$carro1 = new Veiculo("ABC-1234", "Jhuan", "Honda Civic");
$carro2 = new Veiculo("XYZ-9876", "Ana", "Toyota Corolla");
$carro3 = new Veiculo("DEF-5678", "Theo", "Ford Ka");

$estacionamento->entrar($carro1);
$estacionamento->consultarVagasLivres();

$estacionamento->localizar("ABC-1234");

$estacionamento->sair("ABC-1234");
$estacionamento->consultarVagasLivres();

$estacionamento->entrar($carro1);
$estacionamento->entrar($carro2);

$estacionamento->consultarVagasLivres();


// $estacionamento->entrar($carro1);

// $estacionamento->sair("AAA-0000");

// $estacionamento->localizar("AAA-0000");

// $estacionamento->entrar($carro3);

?>