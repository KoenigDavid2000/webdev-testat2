<?php

 $request = array_merge($_POST, $_GET);

$page ='404.php';
$p = '';

if (isset($request['page'])) {
    $p = $request['page'];
}

if ( $p == '' || $p == 'HomeController') {
    $page = 'HomeController';
} else if($p == 'Frage1') {
    $page = 'Frage1';
} else {
    $page = 'Controller';
}

require_once('Controller/' . $page . '.php')

?>