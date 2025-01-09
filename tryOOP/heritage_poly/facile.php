<?php
class Vehicule
{
    public  function deplacer()
    {
        echo "i am Vehicule";
    }
}

class Voituree extends Vehicule
{

    public function deplacer()
    {
        echo "i am car ";
    }
}


class Moto extends Vehicule
{

    public function deplacer()
    {
        echo "i am moto ";
    }
}

$newObject = new Voituree();
$newObject->deplacer();



class Foorm
{
    public  function aireCalcule() {}
}


class cercle extends Foorm
{
    public $raduis;

    public function __construct($raduis)
    {
        $this->raduis = $raduis;
    }

    public function aireCalcule(){
        return $this->raduis*pi()*$this->raduis;
    }
}

$newww=new cercle(2);
echo $newww->aireCalcule();
