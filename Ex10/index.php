<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Estudante;
use App\Acompanhamento;
use App\Atividade;

$estudante = new Estudante("Jhuan", "12345");
$acompanhamento = new Acompanhamento("POO", 80);

$estudante->registrarAcompanhamento($acompanhamento);

$estudante->consultarDesempenho();
echo PHP_EOL;

$ativ1 = new Atividade("Prova 1", 10.0);
$ativ2 = new Atividade("Trabalho Pratico", 5.0);
$ativ3 = new Atividade("Prova 2", 10.0);

$acompanhamento->adicionarAtividade($ativ1);
$acompanhamento->adicionarAtividade($ativ2);
$acompanhamento->adicionarAtividade($ativ3);

$acompanhamento->registrarNota("Prova 1", 8.5);
$acompanhamento->registrarNota("Trabalho Pratico", 5.0);

$acompanhamento->consultarTodas();
echo PHP_EOL;

$acompanhamento->consultarNaoAvaliadas();
echo PHP_EOL;

$estudante->consultarDesempenho();
echo PHP_EOL;

// $ativDuplicada = new Atividade("Prova 1", 10.0);
// $acompanhamento->adicionarAtividade($ativDuplicada);

// $acompanhamento->registrarNota("Prova 2", 11.0);

// $acompanhamento->registrarNota("Prova 3", 5.0);

?>