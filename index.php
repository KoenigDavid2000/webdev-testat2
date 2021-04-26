<?php

include('controller/controller.php');  
include('controller/homecontroller.php');  
include('model/model.php');  
include('view/view.php');  

$request = array_merge($_POST, $_GET);

$page ='404.php';
$p = '';

if (isset($request['page'])) {
    $p = $request['page'];
}

if ( $p == '' || $p == 'HomeController') {
    $page = 'Home';
} else if($p == 'Frage1') {
    $page = 'Frage1';
} else {
    $page = 'Controller';
}

//require_once('Controller/' . $page . '.php')*/

$name = $page . "Controller";

$controller = new $name($request);

echo $controller->display();

?>