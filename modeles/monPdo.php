<?php
class MonPdo{
    private Static $server='mysql:host=localhost';
    private Static $dbname='nation';
    private Static $user='root';
    private Static $mdp='';
    private Static $monPdo;
    private Static $unPdo =null;
  
// construction privé , creer l'instance de PDO qui sera sollicité 
//pour toutes mes méthodes de la classe

 public function __construct(Type $var = null) {
  MonPdo::$unPdo=New PDO(MonPdo::$server.';'.MonPdo::$dbname,MonPdo::$user,MonPdo::$mdp);
  MonPdo::$unPdo>setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

}

public function __destruct(){
  MonPdo::$unPdo=null;
}
// Fontion static qui creer uniquement l'instance de la classe 
//Appel: $instanceMonPdo=MonPdo:getMonPdo();
//@return l'unique objet de la class MonPdo;
public static function getInstance(){
    if(self::$unPdo==null){
        self::$monPdo=new MonPdo();
    }
    return self::$unPdo;
}
}
?>