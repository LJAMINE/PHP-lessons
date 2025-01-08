<?php



// class Emloye{
//     private $salaire;

//     public function setSalaire($salaire){
//         if ($salaire<0) {
//             echo "it is  negative";
//         } else {
//             $this->salaire=$salaire;
//             echo "$salaire is positive";
//         }
        
//     }

//     public function getSal(){
//         return $this->salaire;
//     }
// }


// $newSali=new Emloye();
// $newSali->setSalaire(12);
//  $newSali->getSal();




class Etudiant {
    private $notes=[];

    public function getNotee(){
        return $this->notes;
    }

    public function ajouter($notes){

        if ($notes>0 && $notes<=20) {
            $this->notes[]=$notes;
        }else {
            echo "not good";
        }

    }

}

$newnotes=new Etudiant();
$newnotes->ajouter(1);
$newnotes->ajouter( 12);
print_r($newnotes->getNotee()) ;



?>