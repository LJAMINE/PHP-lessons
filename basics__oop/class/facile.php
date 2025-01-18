<?php
class Animalmise{
    public $nom;
    public $age;

public function __construct($nom,$age){
$this->nom=$nom;
$this->age=$age;
}

    public function sePresenter(){

        echo "Je suis {$this->nom} et j'ai{$this->age} ans";
    }
}

$an=new Animalmise("amine",12);
$an->sePresenter();



class Produicts{
    private $titre;
    private $prix;

    public function __construct($titre,$prix){
        $this->titre=$titre;
        $this->prix=$prix;

    }

    public function getTitre(){
       return $this->titre;
    }
    public function settitre($titre){
        $this->titre=$titre;
    }
    public function getprix(){
        return $this->prix;
     }

     public function setprix($prix){
         $this->prix=$prix;
     }

    public function afficherDetails(){
        echo "Je suis {$this->getTitre()} et j'ai{$this->getprix()} $";

    }
}

$produ=new Produicts("tide",200);
$produ->afficherDetails();

?>