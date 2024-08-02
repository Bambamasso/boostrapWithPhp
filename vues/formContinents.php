<div class="container mt-5">
    <h2 class="pt-3 text-center"><?php echo $mode?> un continent</h2>
        <form action="index.php?uc=continent&action=validForm" method="post" class="col-md-6 offset-md-3 border border-primary p-3 rounds">
            <div class="form-group">
                <label for="libelle">Libellé</label> 
                <input type="text" name="libelle" id="libelle" class="form-control" placeholder="Saisir le nom du continent" value='<?php if($mode=='Modifier'){echo $continent->getLibelle();}?>'>
            </div> 
           <input type="hidden" id="id" name='id' value="<?php if($mode=='Modifier'){echo $continent->getId();}?>">
            </div> 
            <div class="row">
                <div class="col"><a href="index.php?uc=continent&action=list" class="btn btn-warning btn-block">Revenir à la liste</a></div>
                <div class="col"><button type="submit" class="btn btn-success btn-block"><?php echo $mode?></button></div>
            </div> 
           
        </form>
  </div>