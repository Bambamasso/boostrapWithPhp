<?php
class Continents{
    private  $id;
    private  $libelle;

    public function getId(){
        return $this->id;
    }

    public function getLibelle(){
     return $this->libelle;
     
    }

    public function setId($id){
       $this->id=$id ;

    }
    public function setLibelle( string $libelle) : self{
      $this->libelle=$libelle;
      return $this;

    }
//return l'emsenble des continents 
//@return continent[] tableau d'objet continent

public static function findAll(): array {
  try {
      $req = MonPdo::getInstance()->prepare('SELECT * FROM continents');
      $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Continents');
      $req->execute();
      $lesResultats = $req->fetchAll();
      return $lesResultats;
  } catch (PDOException $e) {
      echo "Erreur lors de l'exécution de la requête : " . $e->getMessage() . "<br>";
      echo "Code d'erreur SQLSTATE : " . $e->getCode() . "<br>";
      echo "Informations d'erreur : " . print_r($e->errorInfo, true);
      return []; // Retourner un tableau vide en cas d'erreur
  }
}

    //trouve un contient par son num
    //@param integer $id numéro add contient
    // @param contients objet contient trouvé
    
    public static function findById(int $id):Continents{
      $req=MonPdo::getInstance()->Prepare('SELECT * FROM continents WHERE id=:id');
      $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Continents');
      $req->bindParam('id',$id);
      $req->execute();
      $lesReultats=$req->fetch();
      return $lesReultats;

    }
    // permet d'ajouter un conitnent
    //@param Continent $continent à ajouter;
    //@return integer  resultat (1 si l'opération à réussi, 0 sinon)
    public static function add(Continents $continent): int {
      try {
          $req = MonPdo::getInstance()->prepare('INSERT INTO continents(libelle) VALUES (:libelle)');
          $libelle = $continent->getLibelle();
          $req->bindParam(':libelle', $libelle);
          $nb = $req->execute();
          return $nb ? $req->rowCount() : 0;
      } catch (PDOException $e) {
          echo "Erreur lors de l'ajout du continent : " . $e->getMessage();
          return 0;
      }
  }

    //permet de modifier un continent
    public static function update(Continents $continen):int{
      $req=MonPdo::getInstance()->Prepare('UPDATE continents SET libelle =:libelle WHERE id=:id ');
       $id=$continen->getId();        
       $libelle=$continen->getContinent();
      $req->bindParam(':id',$id);
      $req->bindParam(':libelle',$libelle);
      $nb=$req->execute();
      return $nb;
    }
//permet de suprimer un continent
    public static function delete(Continents $continen):int{
      $req=MonPdo::getInstance()->Prepare('DELETE FROM continents WHERE id=:id ');
      $id=$continen->getId();        
      $req->bindParam('id',$id);
      $nb=$req->execute();
      return $nb;
    }
}


?>