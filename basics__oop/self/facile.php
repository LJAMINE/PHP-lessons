<?php

class mathUtility
{

 public static function addit($a,$b){

    if (self::verifier($a,$b)) {
return $a+$b;
    } else {

echo "error";
    }
    

 }

 public static function verifier($a,$b){
return is_numeric($a)&&is_numeric($b);
 }
    

}

echo mathUtility::addit(1,"lal");




