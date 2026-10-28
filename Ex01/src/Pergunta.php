<?php
namespace App;

use InvalidArgumentException;

class Pergunta
{  
   public function __construct(
    private string $enunciado,
    private string $resposta
   ) {
    if (trim($enunciado) == "" or trim($resposta) == "") {
        throw new InvalidArgumentException("Não pode deixar campo vazio");
    }
   }

   public function getEnunciado(){
    return $this->enunciado;
   }

   public function getResposta(){
    return $this->resposta;
   }

}
?>