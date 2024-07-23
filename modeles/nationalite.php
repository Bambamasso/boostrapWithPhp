<?php
class Nationalite{

    private $num;
    private $libelle;

    public function getNum(){
        return $this->num;
    }

    public function getLibelle(){
     return $this->libelle;
    }

    public function setNum($num){
       $this->num=$num ;
    }
    public function setLibelle( string $libelle) : self{
      $this->libelle=$libelle;
    }
//return l'emsenble des continents 
//@return continent[] tableau d'objet continent

    public static function findAll():array{
     $req=MonPdo::getInstance()->Prepare('SELECT * FROM continents');
     $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Contients');
     $req->execute();
     $lesReultats=$req->fetchAll();
     return $lesReultats;
    }

    //trouve un contient par son num
    //@param integer $id numéro add contient
    // @param contients objet contient trouvé
    
    public static function findById(int $id):Contients{
      $req=MonPdo::getInstance()->Prepare('SELECT * FROM continents WHERE num=:id');
      $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Contients');
      $req->bindParam('id',$id);
      $req->execute();
      $lesReultats=$req->fetch();
      return $lesReultats;

    }
    // permet d'ajouter un conitnent
    //@param Continent $continent à ajouter;
    //@return integer  resultat (1 si l'opération à réussi, 0 sinon)
    public static function add(Continent $continent):int{
      $req=MonPdo::getInstance()->Prepare('INSERT INTO continents (libelle)Values(:libelle)');
      $req->bindParam('id',$continent->getLibelle());
      $nb=$req->execute();
      return $nb;
    
    }

    //permet de modifier un continent
    public static function update(Continent $continent):int{
      $req=MonPdo::getInstance()->Prepare('UPDATE continents SET libelle =:libelle WHERE num=:id ');
      $req->bindParam('id',$continent->getLibelle());
      $req->bindParam('libelle',$continent->getLibelle());
      $nb=$req->execute();
      return $nb;
    }
//permet de suprimer un continent
    public static function delete(Continent $continent){
      $req=MonPdo::getInstance()->Prepare('DELETE FROM continents WHERE num=:id ');
      $req->bindParam('id',$continent->getLibelle());
      $nb=$req->execute();
      return $nb;
    }

}
?>