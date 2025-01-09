<?php

class Animaloop {
    public $nom;
    public $espece;

    public function parler(){
        echo "parler";
    }

}


class chien extends Animaloop{
    public function parler(){
        return 'parler woof';
    }
}

class chatt extends Animaloop{
    public function parler(){
        return 'parler meaoow';
    }
}


$newChien=new chatt();
echo $newChien->parler();
?>