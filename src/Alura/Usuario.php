<?php
namespace App\Alura;

class Usuario
{
    private $nome;
    private $sobrenome;

    public function __construct(string $nome) {

      $nomeSobrenome = explode(" ", $nome, 2);

      if ($nomeSobrenome[0] === ""){
        $this->nome = "Nome inválido";
      } else {
        $this->nome = $nome;
      }

      if ($nomeSobrenome[1] === null){
        $this->sobrenome = "Sobrenome inválido";
      } else {
        $this->sobrenome = $sobrenome;
      }


    }

    public function getNome(): string 
    {
      return $this->nome;
    }

    public function getSobrenome(): string 
    {
      return $this->sobrenome;
    }

}