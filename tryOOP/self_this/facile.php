<?php

class Comptte
{
    public static $nombreDeComptes = 0;

    public static function calcul()
    {
        self::$nombreDeComptes++;
    }
}

$newaccoun = new Comptte();
$newaccoun->calcul();
$newaccoun->calcul();
echo $newaccoun::$nombreDeComptes;




class Etudiantt
{
    public $name;
    public $prenom;


    public function  __construct($name, $prenom)
    {
        $this->name = $name;
        $this->prenom = $prenom;
    }
    public function affichage()
    {
        echo "my name is {$this->name} and prenom is {$this->prenom}";
    }
}
$pou = new Etudiantt("lmgrm", "amine");
$pou->affichage();
