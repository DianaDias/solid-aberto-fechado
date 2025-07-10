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

    public function lerArquivoCsv($diretorio): void{
        $handle = fopen($diretorio, "r");

        while(($linha = fgetcsv($handle, 10000, ";")) !==  false){
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }

        fclose($handle);
    }

    public function lerArquivoTxt($diretorio): void{
        $handle = fopen($diretorio, "r");
       
        while(!feof($handle)){
            $linha = fgets($handle);
            $this->setDados(substr($linha, 0, 4), substr($linha, 5, 4), substr($linha, 10, 4));
        }

        fclose($handle);
    }
}