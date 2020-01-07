<?php

include "../class/CSVReader.php";
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
$csvReader = new CSVReader("../csv/ricette3.csv");

//echo "bevande: ";
// var_dump($csvReader->getDataByKey('Categoria','Bevande')->count() === 6);
// var_dump($csvReader->getDataByKey('Categoria','Bevande')->limit(3)->count() == 3);
// var_dump($csvReader->getDataByIndex(4)->getResult());

//var_dump($csvReader->getAllKeyValues('Categoria')->getResult());

$t = $csvReader->transform(function($item,$key){
    $ingredienti = $item['ingredienti_corretti'];
    $ingredienti = explode('-',$ingredienti);

    $ingredienti = array_map(function($item){
        return trim($item);
    },$ingredienti);

    $ingredienti = array_filter($ingredienti,function($item){
        return strlen($item) != 0;
    });

    //echo($key);
    //var_dump($ingredienti);
    $item['ingredienti_corretti'] = $ingredienti;

    // $localita = explode('+',$item['Località_ita']);
    // $item['Località_ita'] = $localita;
    // $item['citta'] = $localita[0];
    // $item['regione'] = $localita[0];



    return $item;
})->getResult();

//var_dump($t);

file_put_contents("ricette.json",json_encode($t));
// $csvReader = new CSVReader("../ricette.csv");
// $res = $csvReader->getDataByKey('Categoria','Antipasti');
// $res = $csvReader->getDataByKey('Categoria','Bevande');

// print_r($res);

// echo count($res);


