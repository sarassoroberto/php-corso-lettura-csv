<?php 

include "./class/CSVReader.php";
include "./class/ArticleList.php";

$ricette = new CSVReader('./csv/ricette.csv');

$ricetta = $ricette->getDataByIndex($_GET['id'])->getResult();
$menuitems = $ricette->getAllKeyValues('Categoria')->getResult(); 
$category = $ricetta['Categoria'];

$categoryRelated = $ricette->getDataByKey('Categoria',$category,3)->getResult();

print_r($categoryRelated);

include "./view/dettaglio.php";
?>