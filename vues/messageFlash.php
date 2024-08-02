<?php
if(!empty($_SESSION['message'])){
    $messages=$_SESSION['message'];
    foreach($messages as $key=>$message){
 
     echo
     '<div class="container pt-5" >
       <div class="alert alert-'.$key.' alert-dismissible fade show" role="alert">'.$message.'
 
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
      </>
     ';
    }
    $_SESSION['message']=[];
 
 }
?>