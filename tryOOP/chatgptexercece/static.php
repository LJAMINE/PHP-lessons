<?php 
class Utilisateur {
    public static $compteur =0;

    public function __construct($compteur){
        self::$compteur++;
    }

    public function getCompteur()
{
     return self::$compteur;
}

}

$neert=new Utilisateur(12);
$neert=new Utilisateur(12);
echo $neert->getCompteur();





?>