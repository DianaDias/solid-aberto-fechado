<?php    
require __DIR__."/vendor/autoload.php";

use Murph\SolidAbertoFechado\Leitor;

$leitorTxt = new Leitor();
$leitorTxt->setDiretorio(__DIR__."/files/");
$leitorTxt->setArquivo('Plano de estudos - Página2.txt');

$leitorCsv = new Leitor();
$leitorCsv->setDiretorio(__DIR__."/files/");
$leitorCsv->setArquivo('Plano de estudo - Página1.csv');

echo "Funcionando </br>";
// print_r($leitorCsv->lerArquivo());
print_r($leitorTxt->lerArquivo());