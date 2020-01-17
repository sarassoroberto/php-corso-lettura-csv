<?php

$data = json_decode(file_get_contents("ricette.json"));

$res = array_map(function($ricetta){

                return array_map(function($ingrediente){
                            //print_r($ingrediente);
                            echo $ingrediente."\n";
                        },$ricetta->ingredienti_corretti);
},$data);


