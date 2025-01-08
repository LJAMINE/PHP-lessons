<?php

class CompteBancaire
{
    private $titulaire;
    private $solde;

    public function __construct($titulaire, $solde = 10)
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
    }

    public function deposer($montant)
    {

        if ($montant > 0) {
            $this->solde = $this->solde + $montant;
            echo "the solde is {$this->solde}";
        } else {
            echo "mont doit positif";
        }
    }

    public function retirer($montant){

if ($montant>0) {
if ($this->solde=$this->solde-$montant) {

    echo "the solde is {$this->solde}";

     
}else {
    echo "insuffiant";
}
} else {
echo "retrait doit etre positv";
}


    }
}

$newOb = new CompteBancaire("amine", solde: 10);
$newOb->deposer(100);
$newOb->retirer(10);













// class Rectangle {
//     private $longueur; 
//     private $largeur; 

//     public function __construct($longueur,$largeur){
//         $this->largeur=$largeur;
//         $this->longueur=$longueur;
//     }

//     public function aire(){
//       return $this->largeur*$this->longueur;
//     }
// }

// $newaire=new Rectangle(2,2);
// echo $newaire->aire();
