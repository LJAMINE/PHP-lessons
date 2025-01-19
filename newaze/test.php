<?php
class Animola
{

    public static function addition($a, $b)
    {

        if (self::verifierNombreaa($a, $b)) {
            return $a + $b;
        } else {
echo "error";
        }
    }

    public static function verifierNombreaa($a, $b)
    {
        return is_numeric($a) && is_numeric($b);
    }
}

 echo Animola::addition("az",2);