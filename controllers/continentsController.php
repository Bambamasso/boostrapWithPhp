<?php
$action=$_GET['action'];
switch($action){
    case 'list':
        $lesContients=Continents::findAll();
        include('vues/listeContients.php');
        break;

    case 'add':
        break;

    case 'update':
        break;

    case 'delete':
        break;
        

}
?>