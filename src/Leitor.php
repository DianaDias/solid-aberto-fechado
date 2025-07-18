<?php
namespace Murph\SolidAbertoFechado;

use Murph\SolidAbertoFechado\extrator\Csv;
use Murph\SolidAbertoFechado\extrator\Txt;

use function PHPSTORM_META\type;

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

    public function lerArquivo(string $class): array
    {
        $caminho = $this->getDiretorio() ."/". $this->getArquivo();
        $metodo = "lerArquivo". $class;
        $class = "Murph\SolidAbertoFechado\\extrator\\".$class;

        if(!empty($class)){
            $tipo = new $class();
            $result = $tipo->$metodo($caminho);
            $this->result = $result;
        }

        return $this->result;
    }
}