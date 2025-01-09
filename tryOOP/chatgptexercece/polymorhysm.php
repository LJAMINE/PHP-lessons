<?php

abstract class  Formez
{

    abstract  function calculerSurface();
}

class Rectangle extends Formez {
    public $l;
    public $L;

    public function __construct($l,$L){
        $this->l=$l;
        $this->L=$L;
    }

    public function calculerSurface(){
       return $this->l*$this->L;
    }
}

$nee=new Rectangle(3,2);
echo $nee->calculerSurface();