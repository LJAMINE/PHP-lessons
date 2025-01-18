<?php


// class Sms
// {
//     public  $message;
//     public function send($message)
//     {
//         echo "this is send {$message}" . "<br />";
//     }
// }

// class SmsEmail extends Sms
// {
//     public function anz($message)
//     {

//         parent::send($message);

//         echo "this is send {$message}" . "<br />";
//     }
// }
// class Smsphone extends Sms
// {
//     public function send($message)
//     {
//         echo "this is {$message}";
//     }
// }

// $obj = new SmsEmail();
// $obj->anz("emaiiil");



// $obj = new Smsphone();
// $obj->send("phonnnne");




// class vehhicule {

//     protected $type;

//     public function __construct($type){
//         $this->type=$type;

//     }
//     public function gettYspe(){
//         return $this->type;
//     }
//     public function settYpe($type){
//          $this->type=$type;
//     }



//     public function start(){
//         echo "this the {$this->gettYspe()} that is moving ";
//     }
// }
// class CCar extends vehhicule
// {
//     public $brand;
//     public $model;
//     public $year;

//     private $engineType;
//     private $fuelLevel;
//     protected $type;

//     public function __construct($type,$brand, $model, $year,$engineType,$fuelLevel)
//     {
// parent::__construct($type);
//         $this->brand = $brand;
//         $this->model = $model;
//         $this->year = $year;
//         $this->engineType = $engineType;
//         $this->fuelLevel = $fuelLevel;
//     }

//     public function gettype()
//     {
//         return $this->engineType;
//     }
//     public function getlevel()
//     {
//        return $this->fuelLevel;
//     }

//     public function settype($engineType)
//     {
//         $this->engineType = $engineType;
//     }
//     public function setlevel($fuelLevel)
//     {

//         if ($fuelLevel > 0 && $fuelLevel < 100) {
//             $this->fuelLevel = $fuelLevel;
//         } else {
//             echo "error in the level";
//         }
//     }
//     public function getcarinfo()
//     {
//         echo "{$this->brand}{$this->model}{$this->year}{$this->gettype()}{$this->getlevel()}";

//     }


//     public function newOne(){

//         parent::start();


//         echo "The {$this->brand} is ready to move!\n";
//     }
// }











// $newa = new CCar("hybrid","bmw", "speaking", 1222,"siezel",22);
// $newa->setlevel(1);
// $newa->settype("hardy");
// // $newa->getcarinfo();
// $newa->settYpe("aaaaaaa");
// $newa->start();



class vh
{
    private $type;


    public function __construct($type)
    {
        $this->type = $type;
    }

    public function gettyppe()
    {
        return $this->type;
    }
    public function settyppe($type)
    {
        $this->type = $type;
    }

    public function starts()
    {
        echo "this is the type {$this->gettyppe()}";
    }
}


// class cr extends vh{
//     private $brand; 
//     private $model; 
//     private $year; 
//     private $type;


//     public function __construct($brand,$model,$year,$type){
//         parent::__construct($type);
//         $this->brand=$brand;
//         $this->model=$model;
//         $this->year=$year;
//     }

//     public function gettyppe(){
//         return $this->type;
//       }
//       public function settyppe($type){
//          $this->type=$type;
//       }
//     public function getbrand(){
//         return $this->brand;
//       }
//       public function setbrand($brand){
//          $this->brand=$brand;
//       } public function getmodel(){
//         return $this->model;
//       }
//       public function setmodel($model){
//          $this->model=$model;
//       } public function getyear(){
//         return $this->year;
//       }
//       public function setyera($year){
//          $this->year=$year;
//       }

// public function getCarInfo(){
//     echo "{$this->getbrand()}{$this->getyear()}{$this->getmodel()}";
// }


// public function amz(){
//     parent::starts();

//     echo "this he new {$this->gettyppe()}";
// }



// }




// $poo=new cr("bmmw","hybrid",1999,"great");
// $poo->setbrand("mercedis");
// $poo->setmodel("hb");
// $poo->setyera(2000);
// $poo->settyppe("easy");

// $poo->getCarInfo();
// $poo->starts();




interface Movable
{
    public function move();
}



class cr implements Movable
{
    private $brand;
    private $model;
    private $year;


    public function __construct($brand, $model, $year,)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getbrand()
    {
        return $this->brand;
    }
    public function setbrand($brand)
    {
        $this->brand = $brand;
    }
    public function getmodel()
    {
        return $this->model;
    }
    public function setmodel($model)
    {
        $this->model = $model;
    }
    public function getyear()
    {
        return $this->year;
    }
    public function setyera($year)
    {
        $this->year = $year;
    }

    public function getCarInfo()
    {
        echo "{$this->getbrand()}{$this->getyear()}{$this->getmodel()}";
    }

    public function move()
    {
        echo "{$this->getbrand()}{$this->getyear()}move like and on {$this->getmodel()}";
    }
}

class bycicle implements Movable
{

    private $bycile;
    public function __construct($bycile)
    {
        $this->bycile = $bycile;
    }

    public function getbycicle()
    {
        return $this->bycile;
    }
    public function setbycicle($bycile)
    {
        $this->bycile = $bycile;
    }
    public function move()
    {
        echo "this {$this->getbycicle()} is moving as bycicle";
    }
}


$newinter=new bycicle("megane");
