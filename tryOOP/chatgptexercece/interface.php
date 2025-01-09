<?php 
interface souvgarde{
    public function sauvegarder();
}


class Utilisateur implements souvgarde{
    public function sauvegarder(){
        echo "confirù please";
    }
} 
?>