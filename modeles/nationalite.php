<?php
class Nationalite{

    private $id_nationalite;
    private $libelle;
    private $contient_id;

    public function getId_nationalite(){
        return $this->id_nationalite;
    }

    public function getLibelle(){
     return $this->libelle;
    }

    public function getContinent_id():Continents{

      return Continents::findById($yhis->continent_id);
     }
     

    public function setId_nationalite($id_nationalite){
       $this->id_nationalite=$id_nationalite ;
    }
    public function setLibelle( string $libelle) : self{
      $this->libelle=$libelle;
    }

    public function setContient_id(Continents $contient):self{
      $this->contient_id=$contient->getId_nationalite;
   }

//return l'emsenble des continents 
//@return continent[] tableau d'objet continent

    public static function findAll():array{
     $req=MonPdo::getInstance()->Prepare('SELECT * FROM nationnalite');
     $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Nationnalite');
     $req->execute();
     $lesReultats=$req->fetchAll();
     return $lesReultats;
    }

    //trouve un contient par son num
    //@param integer $id numéro add contient
    // @param contients objet contient trouvé
    
    public static function findById(int $id_nationalite):Nationalite{
      $req=MonPdo::getInstance()->Prepare('SELECT * FROM nationnalite WHERE id_nationalite=:id_nationalite');
      $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Nationnalite');
      $req->bindParam('id_nationalite',$id);
      $req->execute();
      $lesReultats=$req->fetch();
      return $lesReultats;

    }
    // permet d'ajouter un conitnent
    //@param Continent $continent à ajouter;
    //@return integer  resultat (1 si l'opération à réussi, 0 sinon)
    public static function add(Nationnalite $nationalite):int{
      $req=MonPdo::getInstance()->Prepare('INSERT INTO nationnalite (libelle),(contient_id)Values(:libelle)(:continent_id)');
      $req->bindParam('libelle',$nationalite->getLibelle());
      $req->bindParam('continent_id',$nationalite->getContinent_id());
      $nb=$req->execute();
      return $nb;
    
    }

    //permet de modifier un continent
    public static function update(Nationalite $nationalite):int{
      $req=MonPdo::getInstance()->Prepare('UPDATE continents SET libelle =:libelle,continent_id=:continent_id WHERE id_nationalite=:id_nationalite ');
      $req->bindParam('libelle',$nationalite->getLibelle());
      $req->bindParam('continent_id',$nationalite->getContinent_id());
      $req->bindParam('id_nationalite',$nationalite->getId_nationalite());
      $nb=$req->execute();
      return $nb;
    }
//permet de suprimer un continent
    public static function delete(Nationalite $nationalite){
      $req=MonPdo::getInstance()->Prepare('DELETE FROM continents WHERE id_nationalite=:id_nationalite ');
      $req->bindParam('id_nationalite',$nationalite->getId_nationalite());
      $nb=$req->execute();
      return $nb;
    }

}
?>