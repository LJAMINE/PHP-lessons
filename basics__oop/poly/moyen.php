<?php
// class Animamal{
//     public function manger(){
//         echo  "Je mange";
//     }
// }

// class Cheien extends Animamal{
//     public function mange(){
//            parent::manger();
//         echo  " la viiande";

//     }
// }

// $chien=new Cheien();
// $chien->mange();



class EMPLoye{
    public function travailler(){
        echo "i work in this firm";

    }


}

class Mangerr extends EMPLoye{

    public function travailer(){
        parent::travailler();
        echo " as a manager";
    }
}



$man=new Mangerr();
$man->travailer();
?>