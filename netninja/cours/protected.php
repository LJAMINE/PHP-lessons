<?php 


class weather{
    public static $tempCondition=['cold','mild','warm'];

    public static function celsiusTofahrenheit($c){

        return $c*9/5+32;
    }

    public static function determinetempCondition($f){

        if ($f<40) {
        return self::$tempCondition[0] ;//cold;
         }elseif($f<70){
            return self::$tempCondition[1] ;   //midl;

         }else{
            return self::$tempCondition[2] ;          //warm;

         }

    }
}
// $weatherInstance=new weather();
// print_r($weatherInstance->tempCondition);

// print_r(weather::$tempCondition);

echo weather::determinetempCondition(90);

?>