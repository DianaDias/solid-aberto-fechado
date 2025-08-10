<?php    
require __DIR__."/vendor/autoload.php";

use Murph\SolidAbertoFechado\Leitor;

$leitorTxt = new Leitor();
$leitorTxt->setDiretorio(__DIR__."/files/");
$leitorTxt->setArquivo('Plano de estudos - Página2.txt');

$leitorCsv = new Leitor();
$leitorCsv->setDiretorio(__DIR__."/files/");
$leitorCsv->setArquivo('Plano de estudos - Página1.csv');

echo "<h2>Leitor de TXT </br></h2>";
// print_r($leitorCsv->lerArquivo());
print_r($leitorTxt->lerArquivo("Txt"));

echo "<h2></br></br>Leitor de CSV </br></h2>";
print_r($leitorCsv->lerArquivo("Csv"));