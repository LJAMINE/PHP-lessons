<?php

class comptebancChat{
    private $soldde;
    private $titulaire;

    public function __construct($soldde,$titulaire){
        $this->soldde=$soldde;
        $this->titulaire=$titulaire;
    }

    public function deposer($montant){
$this->soldde=$this->soldde+$montant;
    } 

    public function retire($montant){
if ($montant < $this->soldde) {
$this->soldde -=$montant;
} else {
echo "error";
}

    }

    public function afftch(){
        echo "{$this->soldde}";
    }

}


$newww=new comptebancChat(100,"amine");
// $newww->deposer(20);
$newww->retire(10);
$newww->afftch();


?>