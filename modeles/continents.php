<?php
class Continents{
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
    public function setLibelle($libelle){
      $this->libelle=$libelle;
    }
}


?>