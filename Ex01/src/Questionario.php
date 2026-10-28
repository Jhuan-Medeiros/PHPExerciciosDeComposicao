<?php
namespace App;

use InvalidArgumentException;

class Questionario
{
    private array $questionarioCompleto = [];

    public function __construct(
        public string $titulo,
    ) {
        if (trim($titulo) == "") {
            throw new InvalidArgumentException("Faltou o titulo do questionário");
        }
    }

    public function adicionarQuestao(Pergunta $adicao): void
    {
        $this->questionarioCompleto[] = $adicao;
    }

    public function getQuestoes(): array
    {
        return $this->questionarioCompleto;
    }

    public function getQuantidadeQuestoes() : int {
        return count($this->questionarioCompleto);
    }
}

?>