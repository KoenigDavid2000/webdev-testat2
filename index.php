<?php

 $request = array_merge($_POST, $_GET);

$page ='404.php';
$p = '';

if (isset($request['page'])) {
    $p = $request['page'];
}

if ( $p == '' || $p == 'HomeController') {
    $page = 'HomeController';
} else {
    $page = 'Controller';
}

require_once('Controller/' . $page . '.php')

?>