<?php 

include "./class/CSVReader.php";

$ricette = new CSVReader('./csv/ricette.csv');


$categoriaPrincipale = isset($_GET['cat'])  ? $_GET['cat'] : 'Antipasti';
$ricetteCategoriaPrincipale = $ricette->getDataByKey('Categoria',$categoriaPrincipale)->getResult(); 

$categories = $ricette->getAllKeyValues('Categoria')->getResult(); 

include "./view/homeView.php";
?>
