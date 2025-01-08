<?php


// class Personne
// {
//     private $nom;
//     private $age;

//     public function getname()
//     {
//         return $this->nom;
//     }

//     public function getAge()
//     {
//         return $this->age;
//     }

//     public function setName($nom)
//     {
//         $this->nom = $nom;
//     }

//     public function setAge($age)
//     {
//         $this->age = $age;
//     }

//     public function agee()
//     {
//         if ($this->age > 0) {
//             echo "{$this->getAge()} is positive";
//         } else {
//             echo "age is negative";
//         }
//     }
// }

// $newPerson=new Personne();
// echo $newPerson->setAge(11);
// $newPerson->agee();



class Compte {
    private $solde;

    public function getSolde(){
        return $this->solde;
    }

    public function setSolde($solde){

        if ($solde>0) {
            $this->solde=$solde;
        } else {
echo "negative";
        }
        

    }
}

$newcompte=new Compte();
$newcompte->setSolde(-12);
echo $newcompte->getSolde();