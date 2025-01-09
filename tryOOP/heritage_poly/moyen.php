<?php
class Animall {
    public function manger(){
        echo "je mange";
    }
}

class chienn extends Animall{
    public function eat(){
        parent::manger();
        echo "manger la viande";
    }
}


$ner=new chienn();
$ner->eat();



class Employee{
    public function travailler(){

    }

}

class maanager extends Employee{
    public function work(){
        parent::travailler();
        echo "working as manager";
    }
}
$ner=new maanager();
$ner->work();
?>