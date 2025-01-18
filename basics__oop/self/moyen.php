<?php

class Comptes{
    public static $nombreDeComptes =0;

    public static function incrementer(){
        self::$nombreDeComptes++;
    }

    
}

  Comptes::incrementer();
  Comptes::incrementer();
  Comptes::incrementer();

  echo Comptes::$nombreDeComptes;

?>