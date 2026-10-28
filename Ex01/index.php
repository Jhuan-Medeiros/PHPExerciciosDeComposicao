<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Pergunta;
use App\Questionario;

$Q = new Questionario("Conhecimentos Gerais");
$P1 = new Pergunta("Qual o nome do satélite natural da terra? \n A. Lua B. Sol C. Via Láctea D. Sputnik", "A");
$P2 = new Pergunta("O que aconteceu no dia 8 de Janeiro de 2023? \n A. Revolução B. Protesto C. Tentativa de golpe D. Vandalismo", "D");
$P3 = new Pergunta("Qual o valor aproximado da aceleração da gravidade da Terra \n A. 20m/s² B. 15m/s C. 10.5m/s D. 10m/s²", "D");

$Q->adicionarQuestao($P1);
$Q->adicionarQuestao($P2);
$Q->adicionarQuestao($P3);

echo $Q->titulo;
foreach ($Q->getQuestoes() as $perguntaAtual) {
    echo $perguntaAtual->getEnunciado() . PHP_EOL;
    echo "----------------------------------------" . PHP_EOL;
}
echo $Q->getQuantidadeQuestoes() . PHP_EOL;

?>