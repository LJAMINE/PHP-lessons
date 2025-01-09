<?php

// class Rectangletest {

//     public $langeur;
//     public $largeur;

//     public function __construct($largeur,$langeur){
//         $this->largeur=$largeur;
//         $this->langeur=$langeur;
//     }

//     public function aire(){
//         return $this->langeur*$this->largeur;
//     }


// }

// $newAire=new Rectangletest(2,2);
//  echo $newAire->aire();


class CompteBancairetest
{
    public $titulaire; 
    public $solde;
    // public $montant; 




    public function __construct($solde,$titulaire){
        $this->solde=$solde;
        $this->titulaire=$titulaire;
        // $this->montant=$montant;
    }

    public function deposer($montant)
    {

        $this->solde = $this->solde + $montant;
        echo "solde". $this->solde;
    }

    public function retirer($montant)
    {
        if ($montant > $this->solde) {
            echo "error";
        } else {
            $this->solde -= $montant;
        echo "solde". $this->solde;
            
        }
    }
}



// $solde = 100;
$newnumer = new CompteBancairetest(100,"amijne");
$newnumer->deposer(40);
$newnumer->retirer(40);