<?php
$action=$_GET['action'];
switch($action){
    case 'list':
        $lesContinents=Continents::findAll();
        include('vues/ListeContinents.php');
        break;

    case 'add':
        $mode ='Ajouter';
        include('vues/formContinents.php');
        break;

    case 'update':
        $mode='Modifier';
        include('vues/formContinents.php');
        break;

    case 'delete':
        break;
    case 'validForm':
        $continent=new Continents();
        if(empty($_POST['id'])){//cas d'un ajout 
           
          $continent->setLibelle($_POST['libelle']) ;
          $nb=Continents::add($continent) ;
          $message='Ajouter';
        }else{//cas d'une modification
            $continent->setId($_POST['id']);
            $continent->setlibelle($_POST['libelle']);
            $nb=Continents::update($continent) ;
          $message='Modifier';
        }
        if($nb==1){
          $session['message']=['success'=>'Le continent a bien été ajouté $message'];
        }else{
            $session['message']=['danger'=>'Le continent a bien été ajouté $message'];
        }
    
        header('LOCATION :index.php?uc=continent&action=list');
        
        break;
        

}
?>