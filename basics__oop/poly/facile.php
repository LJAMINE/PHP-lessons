<?php
// class vhg
// {
//     public  function deplacer()
//     {
//         echo "i am a car ";
//     }
// }

// class voitor extends vhg
// {

//     public function deplacer()
//     {
//         echo "this is voiture";
//     }
// }




// class motos extends vhg
// {

//     public function deplacer()
//     {

//         echo "this is motoaz";
//     }
// }


// $voi = new voitor();
// $voi->deplacer();

// $newMot = new motos();
// $newMot->deplacer();


abstract class Formmm{
    public function calculerAire(){

    }
}

class Cercle extends  Formmm{

    public $raduis;

    public function __construct($raduis){
        $this->raduis=$raduis;
    }
    public function calculerAire(){
return pi()*$this->raduis*$this->raduis;
    }
}
class rectaz extends  Formmm{

    public $l;
    public $r;

    public function __construct($r,$l){
        $this->r=$r;
        $this->l=$l;
    }
    public function calculerAire(){
 return $this->l * $this->r;
    }
}

// $rec=new rectaz(2,3);
// echo $rec->calculerAire();

$cer=new Cercle(2);
echo $cer->calculerAire();