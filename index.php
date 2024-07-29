
<?php 
session_start();
require('vues/header.php');
require('modeles/continents.php');
require('modeles/monPdo.php');
  



$uc= empty ($_GET['uc'])? "Acceuil":$_GET['uc'] ;
switch($uc){
case'Acceuil':include('vues/acceuil.php') ;

break;
case'continent': include('controllers/continentsController.php') ;
break;

}
?>

<?php require('vues/footer.php'); ?>