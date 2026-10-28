<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Turma;
use App\Aluno;

$turma = new Turma("Ciência da Computação", 2);

$aluno1 = new Aluno("Jhuan", 1001, 8.5);
$aluno2 = new Aluno("Ana", 1002, 5.5);

$turma->addAluno($aluno1);
$turma->addAluno($aluno2);

echo "Lista de todos os alunos:" . PHP_EOL;
$turma->getAlunos();
echo PHP_EOL . PHP_EOL;

echo "Alunos aprovados:" . PHP_EOL;
$turma->getAprovados();
echo PHP_EOL;

echo "Média geral da turma: " . $turma->getMediaGeral() . PHP_EOL;
echo PHP_EOL;


$alunoDuplicado = new Aluno("Pedro", 1001, 9.0);
$turma->addAluno($alunoDuplicado);

?>