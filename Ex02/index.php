<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Jogador;
use App\Time;

$team = new Time("Skibidi");
$jogador1 = new Jogador(67, "j", "mei");
$jogador2 = new Jogador(69, "japa", "atc");
$jogador3 = new Jogador(7, "kosky", "gol");
$jogador4 = new Jogador(22, "trev", "zag");

$team->addJogador($jogador1);
$team->addJogador($jogador2);
$team->addJogador($jogador3);
$team->addJogador($jogador4);

$jogadorBuscado = $team->getJogadorCamisa(67);
$totalJogadores = $team->getTotalJogadores();

echo $jogadorBuscado->getJogador() . PHP_EOL;
echo $totalJogadores . PHP_EOL;
echo $team->getEscalacao() . PHP_EOL;
?>