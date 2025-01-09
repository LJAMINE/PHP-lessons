<?php

class Animaltest
{
    public $nom;
    public $age;

    public function __construct($nom, $age)
    {
        $this->age = $age;
        $this->nom = $nom;
    }
    public function sePresenter()
    {
        echo "{$this->nom} and {$this->age}";
    }
}


$ne = new Animaltest("amine", 12);
$ne->sePresenter();



class Produittest
{
    public $nom;
    public $prix;

    public function __construct($nom, $prix)
    {
        $this->nom = $nom;
        $this->prix = $prix; 
    }

    public function afficherDetails()
    {
        echo "name est {$this->nom} and prix est {$this->prix}";
    }
}


$prod = new Produittest("tide", 2222);
$prod->afficherDetails();
