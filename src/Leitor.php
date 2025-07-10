<?php
namespace Murph\SolidAbertoFechado;

class Leitor
{
    private $arquivo;
    private $diretorio;

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

    public function lerArquivo()
    {
        $caminho = $this->getDiretorio() ."/". $this->getArquivo();
        
        $arquivo = new Arquivo();

        $extensao = explode(".", $this->getArquivo());

        if($extensao[1] == "csv"){
            $arquivo->lerArquivoCsv($caminho);
        } else if($extensao[1] == "txt"){
            $arquivo->lerArquivoTxt($caminho);
        }

        return $arquivo->getDados();
    }
}