<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
//routing
$controller = filter_input(INPUT_GET,'controller')  ;
$controller_path = "./controller/$controller.php";
if(isset($controller) && $controller!='' && file_exists($controller_path)){

    
    include ($controller_path);

}else{

    echo "pagina non trovata";
}