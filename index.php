
<?php 
session_start();
require('vues/header.php');?>
  
<?php  $uc= empty ($_GET['uc'])? "Acceuil":$_GET['uc'] ;
switch($uc){
case'Acceuil':include('vues/acceuil.php') ;
break;
case'Continents': ;
break;

}
?>

<?php require('vues/footer.php'); ?>