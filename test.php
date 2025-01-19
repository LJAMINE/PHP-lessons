<?php
class Animal
{
    public $nom;
    public $age;

    public function sepresentre()
    {
        echo "Je suis {$this->nom} et j'ai {$this->age} ans";
    }
}

class Produit
{
    public $nom;
    public $price;
    public function __construct($nom, $price)
    {

        $this->nom = $nom;
        $this->price = $price;
    }

    public function afficherDetails()
    {
        echo "{$this->nom}{$this->price}";
    }
}



class CompteBan
{
    public $tit;
    public $sold;

    public function __construct($tit, $sold)
    {
        $this->sold = $sold;
        $this->tit = $tit;
    }

    public function depose($ammount)
    {
        $this->sold += $ammount;
    }

    public function retire($ammount)
    {
        if ($ammount > $this->sold) {
            throw new Exception("the amount is bigger", 1);
        } else {
            $this->sold -= $ammount;
        }
    }
}


$bank=new CompteBan("AZE",1222);
 echo $bank->depose(1000);


?>

