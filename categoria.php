<?php 

include "./class/CSVReader.php";
include "./class/ArticleList.php";

$ricette = new CSVReader('./csv/ricette3.csv');

$categoriaPrincipale = isset($_GET['cat'])  ? $_GET['cat'] : 'Antipasti';
$ricetteCategoriaPrincipale = $ricette->getDataByKey('Categoria',$categoriaPrincipale)->limit(4)->getResult(); 

$menuitems = $ricette->getAllKeyValues('Categoria')->getResult(); 
$antipasti = $ricette->getDataByKey('Categoria','Antipasti')->limit(3)->getResult();

$PrimiPiatti = $ricette->getDataByKey('Categoria','Primi Piatti')->limit(3)->getResult();
$Contorni = $ricette->getDataByKey('Categoria','Contorni')->limit(3)->getResult();


include "./view/categoryView.php";
?>