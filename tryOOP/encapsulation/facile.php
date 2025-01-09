<?php
class PersonneTest{
    private $nom;
    private $age;


    public function getNom(){
        return $this->nom;
    }

    
    public function getage(){
        return $this->age;
    }
    public function setnom($nom){
        $this->nom=$nom;
   }

    public function setage($age){
        if ($age < 0) {
            echo "negative number\n";
        }else{
            $this->age=$age;
            echo "age est posittive" . $age;
        }

    }


}

// $per=new PersonneTest();
// $per->setage(age: -100);
// $per->getage();






class Comptee{
    private $solde;

    public function getSolde(){
        return $this->solde;
    }

    public function setSoldee($solde){


        if ($solde > 0) {
            $this->solde=$solde;
            echo "solde is positive";
            # code...
        } else {
            echo "solde is nigga";
            # code...
        }
        
    }
}

$newwCompte=new Comptee();
$newwCompte->setSoldee(-122);
?>