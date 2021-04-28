<?php
 
include('view/homeview.php');  
include('view/frageview.php');
include('worker/userworker.php');

session_start();

$request = array_merge($_POST, $_GET);

$p = '';

if (isset($request['action'])) {
    $p = $request['action'];
}

if ( $p == '' || $p == 'HomeView') {
    HomeView::openHome();
} else if($p == 'seite2') {
    $userworker = new UserWorker();
    $userworker->saveUser($request['geschlecht'], $request['beruf'], $request['alter']);
    FrageView::openFragen();
} else if ($p == 'seite3'){
    //AuswertungView::openAuswertung();
}

//require_once('View/' . $page . '.php');


?>