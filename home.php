<?php 

include "./class/CSVReader.php";
include "./class/ArticleList.php";

$ricette = new CSVReader('./csv/ricette.csv');
$categoriaPrincipale = isset($_GET['cat'])  ? $_GET['cat'] : 'Antipasti';
$ricetteCategoriaPrincipale = $ricette->getDataByKey('Categoria',$categoriaPrincipale)->getResult(); 

$menuitems = $ricette->getAllKeyValues('Categoria')->getResult(); 
$antipasti = $ricette->getDataByKey('Categoria','Antipasti',3)->getResult();

include "./view/homeView.php";
?>