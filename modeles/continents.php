<?php
class Continents{
    private $id;
    private $continent;

    public function getId(){
        return $this->id;
    }

    public function getContinent(){
     return $this->continent;
    }

    public function setId($id){
       $this->id=$id ;
    }
    public function setContinent( string $continent) : self{
      $this->continent=$continent;
    }
//return l'emsenble des continents 
//@return continent[] tableau d'objet continent

    public static function findAll():array{
      $req=MonPdo::getInstance()->prepare('SELECT * FROM continents ');
      $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Continents');
     
    //  $req=MonPdo::getInstance()->Prepare('SELECT * FROM nationnalite INNER JOIN continents WHERE nationnalite.continent_id = continents.id');
    //  $req->setFetchMode(PDO::FETCH_OBJ);
    $req->execute();
    $lesResultats=$req->fetchAll();
    return $lesResultats;

    }

    //trouve un contient par son num
    //@param integer $id numéro add contient
    // @param contients objet contient trouvé
    
    public static function findById(int $id):Contients{
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
    public static function add(Continents $continen):int{
      $req=MonPdo::getInstance()->Prepare('INSERT INTO continents (continent)Values(:continent)');
      $req->bindParam('continent',$continen->getContinent());
      $nb=$req->execute();
      return $nb;
    
    }

    //permet de modifier un continent
    public static function update(Continents $continen):int{
      $req=MonPdo::getInstance()->Prepare('UPDATE continents SET continent =:continent WHERE id=:id ');
      $req->bindParam('id',$continen->getId());
      $req->bindParam('continent',$continen->getContinent());
      $nb=$req->execute();
      return $nb;
    }
//permet de suprimer un continent
    public static function delete(Continents $continen):int{
      $req=MonPdo::getInstance()->Prepare('DELETE FROM continents WHERE id=:id ');
      $req->bindParam('id',$continen->getId());
      $nb=$req->execute();
      return $nb;
    }
}


?>