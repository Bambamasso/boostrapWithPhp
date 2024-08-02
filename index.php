
<?php 
ob_start();
session_start();
include('vues/header.php');
include('modeles/continents.php');
include('modeles/monPdo.php');
include('vues/messageFlash.php');

 
$uc= empty ($_GET['uc'])? "Acceuil":$_GET['uc'] ;
switch($uc){
case'Acceuil':include('vues/acceuil.php') ;

break;
case'continent': include('controllers/continentsController.php') ;
break;

}
?>

<?php require('vues/footer.php'); ?>