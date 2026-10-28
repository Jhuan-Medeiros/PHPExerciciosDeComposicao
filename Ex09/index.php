<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Aventureiro;
use App\Equipamento;

$aventureiro = new Aventureiro("Link", 100, 50.0);

$espada = new Equipamento("Espada Longa", 15.0, 150.0);
$escudo = new Equipamento("Escudo de Ferro", 20.0, 100.0);
$pocao = new Equipamento("Pocao de Vida", 2.0, 50.0);

$aventureiro->coletar($espada);
$aventureiro->coletar($escudo);
$aventureiro->coletar($pocao);

$aventureiro->consultarMochila();
echo PHP_EOL;

$aventureiro->descartar("Escudo de Ferro");
$aventureiro->consultarMochila();
echo PHP_EOL;

// $anelErro = new Equipamento("Anel Amaldicoado", -5.0, 100.0);

// $aventureiro->descartar("Arco de Madeira");

$armaduraPesada = new Equipamento("Armadura de Aco", 40.0, 500.0);
$aventureiro->coletar($armaduraPesada);

?>