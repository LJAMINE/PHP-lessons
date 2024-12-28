<?php

class Animal{

  protected $name;
  protected $species;

  public function __construct($name,$species){

$this->name=$name;
$this->species=$species;

}

public function describe(){

  echo "this is a  {$this->species} and named   {$this->name}  ";
    
    }
    
  
}

class Anonymous_Animl extends Animal{

 public $sound;

 public function __construct($name, $species,$sound){
  parent::__construct($name,$species);
  $this->set_sound($sound);
 }

 public function set_sound($sound){
  $this->sound=$sound;
 }

 public function get_sound(){
  return $this->sound;
 }

 public function describe(){

  parent::describe();

  echo "by the way this my voice {$this->get_sound()}";
    
    }}

    $mynewAnimal=new Anonymous_Animl("sali","cat","meao");
    $mynewAnimal->describe();
    $mynewAnimal=new Anonymous_Animl("bro","dog","bark");
    echo"<br>";
    $mynewAnimal->describe();


    


?>