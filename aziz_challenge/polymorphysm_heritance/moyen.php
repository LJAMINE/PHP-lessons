<?php 

class Animalh {
    public function manger(){
        // echo "Je mange";
    }
}

class Chien extends Animalh{

    public function eat(){
        parent::manger();
        echo "chien mange viande";
    }
}

$newAn=new Chien();
$newAn->eat();




class Employeee{
    public function travailler(){
echo "employe travail economy";
    }
} 

class Manager extends Employeee{
public function createe(){
    parent::travailler();
    echo "manager travail informatique";
}
}

$newTrea=new Manager();
$newTrea->createe();
?>