<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Sessao;
use App\Ingresso;

$sessao = new Sessao("O Senhor dos Aneis", 50);

$sessao->consultarDisponiveis();
$sessao->calcularArrecadacao();

$ingresso1 = new Ingresso("Jhuan", 15, 30.00);
$ingresso2 = new Ingresso("Maria", 16, 15.00);

$sessao->venderIngresso($ingresso1);
$sessao->venderIngresso($ingresso2);

echo PHP_EOL;
$sessao->consultarOcupadas();
$sessao->consultarDisponiveis();
$sessao->calcularArrecadacao();
echo PHP_EOL;

// $ingresso3 = new Ingresso("Pedro", 55, 30.00);
// $sessao->venderIngresso($ingresso3);

$ingresso4 = new Ingresso("Lucas", 15, 30.00);
$sessao->venderIngresso($ingresso4); 

?>