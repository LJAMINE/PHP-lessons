<?php 
class Animalll {
private $name;
private $color;

public function __construct($name,$color){
    $this->color=$color;
    $this->name=$name;
}

public function presneter(){
    echo "name is {$this->name}  and color is {$this->color}" . "<br >" ;
}

}

$newObject=new Animalll("cat","red");
$newObject->presneter();


class Prosuit{
    private $nom;
    private $prix;

    public function __construct($nom,$prix){
        $this->nom=$nom;
        $this->prix=$prix;
    }

    public function afficherDetails(){
        echo "{$this->nom} et {$this->prix}";
    }
}

$newOne=new Prosuit("amune",12222);
$newOne->afficherDetails();
?>
