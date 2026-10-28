<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\RegistroMissoes;
use App\Missao;

$registro = new RegistroMissoes();

$missao1 = new Missao("Salvar a vila", "Derrotar os goblins invasores", 150);
$missao2 = new Missao("Encontrar o anel", "Buscar o anel perdido na caverna", 300);

$registro->adicionarMissao($missao1);
$registro->adicionarMissao($missao2);

$registro->consultarMissoes();
$registro->calcularRecompensas();

$registro->concluirMissao("Salvar a vila");

$registro->consultarPendentes();
$registro->calcularRecompensas();

$registro->concluirMissao("Salvar a vila");

?>