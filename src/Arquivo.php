<?php
namespace Murph\SolidAbertoFechado;

class Arquivo
{
    private $dados = array();

    public function setDados(string $nome, string $cpf, string $email){
        array_push($this->dados, ["nome" => $nome, "cpf" => $cpf, "email" => $email]);
    }

    public function getDados(){
        return $this->dados;
    }
}