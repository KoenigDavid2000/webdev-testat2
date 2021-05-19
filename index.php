<?php

include('view/homeview.php');  
include('view/frageview.php');
include('view/auswertungview.php');
include('worker/userworker.php');
include('worker/fragenworker.php');
include('model/user.php');

session_start();
$request = array_merge($_POST, $_GET);

$p = '';

if (isset($request['action'])) {
    $p = $request['action'];
}

if (isset($request['geschlecht']) && isset($request['beruf']) &&  isset($request['alter'])) {
    $userworker = new UserWorker(); 
    $userworker->saveUser($request['geschlecht'], $request['beruf'], $request['alter']);
    $id = DB::lastInsertId();
    $user = $userworker->getUserByID($id);
    $_SESSION['user'] = $user; 
    //echo $_SESSION['user']->getID();
}


if (($p == '' || $p == 'seite1' || $p == 'seite2' || $p == 'seite3') && !isset($_SESSION['user'])) {

    HomeView::openHome();

} else if(($p == '' || $p == 'seite2') && isset($_SESSION['user'])) {

    FrageView::openFragen();

} else if ($p == 'seite3'){

    if (isset($request['frage1']) && isset($request['frage2']) && isset($request['frage3']) && isset($request['frage4'])) {
        $frageworker = new FragenWorker();
        $frageworker->insertAntwort($request['frage1']);
        $frageworker->insertAntwort($request['frage2']); 
        $frageworker->insertAntwort($request['frage3']);
        $frageworker->insertAntwort($request['frage4']);
        
        AuswertungView::openAuswertung();
        session_destroy();
    } else {
         FrageView::openFragen(false);
    }


}




?>