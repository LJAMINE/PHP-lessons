<?php 
interface souvgarde{
    public function sauvegarder();
}


class Utilisateurr implements souvgarde{
    public function sauvegarder(){
        echo "confirù please";
    }
} 


$p=new Utilisateurr();
$p->sauvegarder();
?>