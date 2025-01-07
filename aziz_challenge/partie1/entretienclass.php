<?php

interface IEntretien
{


    public function obtenirDateDernierEntretien();
    public function obtenirTypeEntretien();
    public function définirDateDernierEntretien($date);
    public function définirTypeEntretien($type);
}

abstract class Entretien implements IEntretien
{


    protected $dateDernierEntretien;
    protected $typeEntretien;

    public function obtenirDateDernierEntretien()
    {
        return $this->dateDernierEntretien;
    }
    public function obtenirTypeEntretien()
    {
        return $this->typeEntretien;
    }
    public function définirDateDernierEntretien($dateDernierEntretien): void
    {
        $this->dateDernierEntretien = $dateDernierEntretien;
    }
    public function définirTypeEntretien($typeEntretien)
    {
        $this->dateDernierEntretien = $typeEntretien;
    }
}



class maintenance extends Entretien
{
    public $responsable;
    public $cout;

    public function __construct($dateDernierEntretien,$typeEntretien,$responsable, $cout)
    {
        $this->cout = $cout;
        $this->responsable = $responsable;
        $this->définirDateDernierEntretien( $dateDernierEntretien);
        $this->définirTypeEntretien($typeEntretien);
    }


    public function obtenirResponsable(){
        return $this->responsable;
    }

    public function obtenircout(){
        return $this->cout;
    }
    public function definircout($cout){
        $this->cout=$cout;
   }
   public function definirresponsable($responsable){
    $this->responsable=$responsable;
}





}



 
