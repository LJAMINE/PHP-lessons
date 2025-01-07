<?php

interface IEntretien
{

    public function obtenirDateDernierEntretien();
    public function obtenirTypeEntretien();
    public function définirDateDernierEntretien($date);
    public function définirTypeEntretien($type);
}

class AmineEntretien implements IEntretien
{

    public $date;
    public $type;
    public function obtenirDateDernierEntretien()
    {
        return $this->date;
    }
    public function obtenirTypeEntretien()
    {
        return $this->type;
    }
    public function définirDateDernierEntretien($date) {

$this->date=$date;

    }
    public function définirTypeEntretien($type) {

$this->type=$type;

    }
}

$newobjcty=new AmineEntretien();
$newobjcty->définirDateDernierEntretien(1999);
$newobjcty->définirTypeEntretien("amine");

echo $newobjcty->obtenirDateDernierEntretien();
echo $newobjcty->obtenirTypeEntretien();





