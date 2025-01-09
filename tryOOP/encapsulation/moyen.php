<?php
// class EMMployee{
//     private $salaire;

//     public function getterSali(){
//         $this->salaire;

//     }

//     public function setterSal($salaire){

//      if ($salaire > 0) {
//         echo  "positive";
//         $this->salaire=$salaire;
//      }else {
//         echo  "negative";
//      }

//     }

// }

// $newempll=new EMMployee();
// $newempll->setterSal(22);



class EtudiantR
{
    private $notes = [];

    public function getter()
    {
        return $this->notes;
    }

    public function ajouter($note)
    {

        if ($note > 0 && $note <20) {
            $this->notes[] = $note;
        } else {
            echo "not correct";
        }
    }
}


$newajouter = new EtudiantR();
$newajouter->ajouter(12);
$newajouter->ajouter(12);
$newajouter->ajouter(12);
print_r($newajouter->getter());