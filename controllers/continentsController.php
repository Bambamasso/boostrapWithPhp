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
        $continent=Continents::findById($_GET['id']);
        include('vues/formContinents.php');
        break;

    case 'delete':
        // $mode='Delete';
        $continent=Continents::findById($_GET['id']);
        $nb=Continents::delete($continent);
        $message='supprimé';
        if($nb==1){
            $session['message']=['success'=>'Le continent a bien été supprimer $message'];
          }else{
              $session['message']=['danger'=>'Le continent a bien été supprimer $message'];
          }
      
          header('Location :index.php?uc=continent&action=list');
        break;
    case 'validForm':
        $continent=new Continents();
        if(empty($_POST['id'])){//cas d'un ajout 
           
          $continent->setLibelle($_POST['libelle']);
          $nb=Continents::add($continent) ;
          $message='Ajouter';
        }else{//cas d'une modification
            $continent->setId($_POST['id']);
            $continent->setLibelle($_POST['libelle']);
            $nb=Continents::update($continent) ;
          $message='Modifié';
        }
        if($nb==1){
          $session['message']=['success'=>'Le continent a bien été ajouté $message'];
        }else{
            $session['message']=['danger'=>'Le continent a bien été ajouté $message'];
        }
    
        header('Location :index.php?uc=continent&action=list');
        
        break;
        

}
?>