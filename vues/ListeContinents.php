<?php?>


<div class="container mt-5">
  <div class="row">
      <div class="col-9"><h2>Liste des continents</h2></div>
      <div class="col-3"><a href="index.php?uc=continent&action=add" class="btn btn-success"> Creer un continent</a></div>
      
    </div>

    <table class="table table-striped">
        <thead>
            <tr class="d-flex" >
              <th scope="col" class="col-md-2">Numéro</th>
                  <th scope="col" class="col-md-4">Continents</th>
                  <th scope="col" class="col-md-3">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($lesContinents as $values): ?>
              <tr class="d-flex">
                    <td class="col-md-2"><?php echo $values->getId()?></td>
                    
                    <td class="col-md-4"><?php echo $values->getLibelle()?></td>
                    <td class="col-md-3">
                        <a href="index.php?uc=continent&action=update&id=<?php echo $values->getId();?>" class="btn btn-primary">Modifier</a>
                        <a href="#modalSuppression" data-toggle="modal" data-message="Voulez vous supprimer ce continent ?" data-suppression="index.php?uc=continent&action=delete&id=<?php echo $values->getId();?> "  class="btn btn-danger">Suprimer</a>
                    </td>
                    <!-- supNationalite.php?idSup=<?php echo $value['id'];?> -->
                </tr>
        
            <?php endforeach?>
    
        </tbody>
    </table>
    
</div>      