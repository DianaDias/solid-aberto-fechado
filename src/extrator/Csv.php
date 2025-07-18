<?php

namespace Murph\SolidAbertoFechado\extrator;

use Murph\SolidAbertoFechado\Arquivo;

class Csv extends Arquivo{

    public function lerArquivoCsv($diretorio): array
    {
        
        $handle = fopen($diretorio, "r");
        $arquivo = new Arquivo();

        while(($linha = fgetcsv($handle, 10000, ";")) !==  false){
            
            $arquivo->setDados($linha[0], $linha[1], $linha[2]);
        }

        fclose($handle);

        return $arquivo->getDados();
    }
}