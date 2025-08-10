<?php
namespace Murph\SolidAbertoFechado;

use Murph\SolidAbertoFechado\extrator AS extrator;
use Murph\SolidAbertoFechado\extrator\Txt;

class Leitor
{
    private $arquivo;
    private $diretorio;
    private $class;
    private array $result = [];

    public function getDiretorio()
    {
        return $this->diretorio;
    }

    public function setDiretorio(string $diretorio)
    {
        $this->diretorio = $diretorio;
    }

    public function setArquivo(string $arquivo)
    {
        return $this->arquivo = $arquivo;
    }

    public function getArquivo()
    {
        return $this->arquivo;
    }

    public function lerArquivo(): array
    {
        $caminho = $this->getDiretorio() ."/". $this->getArquivo();
        $class = explode(".", $this->getArquivo());
        $metodo = "lerArquivo". $class[1];
        $class = ucfirst($class[1]);
        $class = "Murph\SolidAbertoFechado\\extrator\\".$class;

        if(!empty($class)){
            $tipo = new $class();
            $result = $tipo->$metodo($caminho);
            $this->result = $result;
        }

        return $this->result;
    }
}