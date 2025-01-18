<?php
class Persone
{
    private $nom;
    private $age;


    public function __construct($nom, $age)
    {
        $this->age = $age;
        $this->nom = $nom;
    }
    public function  getAge()
    {
        return $this->age;
    }
    public function  getnom()
    {
        return $this->nom;
    }


    public function setAge($age)
    {
        if ($age > 0) {
            $this->age = $age;
        } else {
            echo "error";
        }
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function aff()
    {
        echo "{$this->getAge()}{$this->getnom()}";
    }
}

$pers = new Persone("amine", 12);
$pers->setAge(5);
$pers->setNom("said");
$pers->aff();




class Cmt{
    private $solde;

    public function __construct($solde){
$this->solde=$solde;
    }

    public function getSolde(){
      return  $this->solde;
    }

    public function setSolde($solde){

        if ($solde>0) {
            # code...
            $this->solde=$solde;
        } else {
            echo "erro";
        }
        
      }
}

$newh=new Cmt(100);
$newh->setSolde(66);
 echo $newh->getSolde();