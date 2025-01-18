<?php
class CompteBancairee {
    public $titulaire ;
    public $solde ;

    public function __construct($titulaire,$solde){
$this->solde=$solde;
$this->titulaire=$titulaire;
    }
    
    public function deposer($montant){
        $this->solde+=$montant;
echo "solde is {$this->solde}";

    }
    public function retire($montant){

        if ($montant>$this->solde) {
echo "montant bigger than the solde";
        } else {
            $this->solde-=$montant;
echo "rest is {$this->solde}";
            
            
        }
        
    }
}

$dispo=new CompteBancairee("amie",100);
$dispo->deposer(20);

$dispo->retire(20);


?>