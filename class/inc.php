<?php 


include "../class/CSVReader.php";

$ricette = new CSVReader('../ricette.csv');


$categoriaPrincipale = isset($_GET['cat'])  ? $_GET['cat'] : 'Antipasti';
$ricetteCategoriaPrincipale = $ricette->getDataByKey('Categoria',$categoriaPrincipale)->getResult(); 

print_r($_GET);

$categories = $ricette->getAllKeyValues('Categoria')->getResult(); 
?>

