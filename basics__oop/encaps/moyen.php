<?php
class Empl
{
    private $salaire;

    public function __construct($salaire)
    {
        $this->salaire = $salaire;
    }

    public function getsal()
    {
        return $this->salaire;
    }

    public function setS($salaire)
    {
        if ($salaire > 0) {
            $this->salaire = $salaire;
        } else {
            echo "error";
        }
    }
}

$nb = new Empl(22);
$nb->setS(11);
echo $nb->getsal();




class ETud
{
    private $notes = [];

  


    public function ajouterNotezz($note)
    {
        if ($note > 0  && $note < 20) {
            $this->notes[]= $note ;
        } else {
            echo "error";
        }
    }

    
    public  function getNotess()
    {
        return $this->notes;
    }

  
}


$newh=new ETud();
$newh->ajouterNotezz(18);
$newh->ajouterNotezz( 18);
var_dump($newh->getNotess());


