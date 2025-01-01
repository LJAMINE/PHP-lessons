<?php
// class Parson{
//     private $name;


//    public function getName(){
//       return $this->name;
//    }

//    public function setName($name){
//     $this->name=$name;
//    }
// }

// $user=new Parson();

// $user->setName("broo");

// echo $user->getName();


//encapsulation Goal: : Hide data and control access(setter and getter)




// inheritance:Goal: Reuse and extend properties and methods.

// class Animalll{
//     public function eat(){
//         echo "and it can eat";
//     }
// }


// class Cat extends Animalll{
// public function mewo(){
//     echo 'cat can meao';

// }

// }
// $newAnimal=new Cat();

// echo $newAnimal->mewo();
// echo $newAnimal->eat();


//Goal: Same method behaves differently in child classes.

class Payment{

    public function processPayment($amountt){
        echo "process payment of $$amountt";
    }
}


class creditCard extends Payment{

    public function processPayment($amountt){
        echo "process payment with creditCard for $$amountt.\n";
    }
}

class payCard extends Payment{

    public function processPayment($amountt){
        echo "process payment with paypal for $$amountt.\n";

    }
}

$payment=[
    new payCard(),new creditCard()
];

foreach ($payment as $mypayment ){
    $mypayment->processPayment(100);
}
?>