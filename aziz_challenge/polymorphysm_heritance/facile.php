<?php
class Vehicule
{

    public function deplacer()
    {
        echo "moving Vehicule" . '<br >';
    }
}

class Voiture extends Vehicule
{

    public function deplacer()
    {
        echo "moving voiture" . '<br >';
    }
}

class Moto  extends Vehicule
{
    public function deplacer()
    {
        echo "moving Moto" . '<br >';
    }
}

$newveh = new Vehicule();
$newveh->deplacer();

$newVoi = new Voiture();
$newVoi->deplacer();

$newmoto = new Moto();
$newmoto->deplacer();




class Forme {

public function calculerAire(){
}

}

class Rectangle extends Forme {

    private $largeur;
    private $longeur;

    public function __construct($largeur,$longeur){
        $this->largeur=$largeur;
        $this->longeur=$longeur;
    }

    public function calculerAire(){

        return $this->largeur*$this->longeur;
    }
}

$newREC=new Rectangle(2,2);
echo $newREC->calculerAire();
