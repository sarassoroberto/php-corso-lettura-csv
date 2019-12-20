<?php 
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);

include "../class/CSVReader.php";


$ricette = new CSVReader('../ricette.csv');


$categoriaPrincipale = isset($_GET['cat'])  ? $_GET['cat'] : 'Antipasti';
$ricetteCategoriaPrincipale = $ricette->getDataByKey('Categoria',$categoriaPrincipale)->getResult(); 

print_r($_GET);

$categories = $ricette->getAllKeyValues('Categoria')->getResult(); 
?>

