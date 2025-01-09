<?php

class Voiturechat
{
    public $color;
    public $marque;
    public $modele;

    private $vitesseMax;

    public function __construct($color, $marque, $modele,$vitesseMax)
    {

        $this->color = $color;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesseMax = $vitesseMax;
    }
    public function getVitesseMax()
    {
        return $this->vitesseMax;
    }
    public function setVitesseMax($vitesseMax)
    {
        $this->vitesseMax = $vitesseMax;
    }

    public function afficherDetails()
    {
        echo "the modele is {$this->modele} and {$this->marque} and {$this->color} and vs{$this->vitesseMax}";
    }
}

$newSER = new Voiturechat("red", "bmw", 123,222);
$newSER->afficherDetails();
