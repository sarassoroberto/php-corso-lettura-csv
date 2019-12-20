<?php

include "../class/CSVReader.php";

$csvReader = new CSVReader("../ricette.csv");

echo "bevande: ";
// var_dump($csvReader->getDataByKey('Categoria','Bevande')->count() === 6);
// var_dump($csvReader->getDataByKey('Categoria','Bevande')->limit(3)->count() == 3);
// var_dump($csvReader->getDataByIndex(4)->getResult());

var_dump($csvReader->getAllKeyValues('Categoria')->getResult());


// $csvReader = new CSVReader("../ricette.csv");
// $res = $csvReader->getDataByKey('Categoria','Antipasti');
// $res = $csvReader->getDataByKey('Categoria','Bevande');

// print_r($res);

// echo count($res);


