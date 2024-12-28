<?php 


class Car{
    public $make;
    protected $model;
    private $year;

    public function __construct($make,$model,$year){
        $this->make=$make;
        $this->model=$model;
        $this->year=$year;
    }

    public function getModel(){
        return $this->model;
    }
    public function getYear(){
        return $this->year;
    }
    
}

class electric extends Car{
    public $electriVla;


    public function __construct($make, $model, $year,$electriVla){
        parent::__construct($make, $model, $year);
        $this->electriVla=$electriVla;
    }

   public function getelectri(){
    return $this->electriVla;
   }

   public function setelectri($electriVla){
    return $this->electriVla=$electriVla;
   }
}

$newVal=new Car("bmw","mm2",1999);
echo $newVal->getModel();
echo $newVal->getYear () ;
echo $newVal->make.'<br>' ;


$newelectr=new electric("testla","mm2",2000,"1222 hours");
echo $newelectr->make;
echo $newelectr->getModel();
echo $newelectr->getYear () ;
echo $newelectr->setelectri("NEW") ;

// echo $newelectr->electriVla;

?>