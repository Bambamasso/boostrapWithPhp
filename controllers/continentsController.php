<?php
$action=$_GET['action'];
switch($action){
    case 'list':
        $lesContinents=Continents::findAll();
        include('vues/ListeContinents.php');
        break;

    case 'add':
        break;

    case 'update':
        break;

    case 'delete':
        break;
        

}
?>