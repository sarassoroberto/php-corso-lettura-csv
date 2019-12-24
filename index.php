<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
//routing
$controller = filter_input(INPUT_GET,'controller')  ;
$controller_path = "./$controller.php";

// echo "<pre>".print_r($_SERVER,true)."</pre>";
print_r($_GET);

if ($_SERVER['REQUEST_URI'] == '/') {
    include ('home.php');
} 

else if(isset($controller) && $controller!='' && file_exists($controller_path)){

    
    include ($controller_path);

}else{

    echo "pagina non trovata";
}