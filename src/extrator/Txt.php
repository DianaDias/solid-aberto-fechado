<?php

namespace Murph\SolidAbertoFechado\extrator;

use Murph\SolidAbertoFechado\Arquivo;

class Txt extends Arquivo{

    public function lerArquivoTxt($diretorio): array
    {
        $handle = fopen($diretorio, "r");
        $arquivo = new Arquivo();
       
        while(!feof($handle)){
            $linha = fgets($handle);            
            $arquivo->setDados(substr($linha, 0, 4), substr($linha, 5, 4), substr($linha, 10, 4));
        }

        fclose($handle);

        return $arquivo->getDados();
    }
}