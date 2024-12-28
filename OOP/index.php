<?php 



// class person{
//       private  $title;
//       private  $author;
//       private  $ISBN ;

//       public function __construct($title,$author,$ISBN){
//         $this->title=$title;
//         $this->author=$author;
//         $this->ISBN=$ISBN;

//       }

//       public function display(){
//         echo"the title is $this->title ,and the author is $this->author, also the ISBN is $this->ISBN";
//       }

// }

// $student=new person("book","amine","azer");
// $student->display();



// abstract class Shape{
//     abstract public function area();
// }


// class circle extends Shape{
//     private $raduis;

//     public function __construct($raduis){
//         $this->raduis=$raduis;
//     }

//     public function area(){
//         return pi()*$this->raduis*$this->raduis;
//     }
// }

// $newshape=new circle(2);
// echo $newshape->area();



// class book{
//     private $title;
//     private $author;
//     private $ISBN ;

//     public function __construct($title,$author,$ISBN){
//         $this->author  =$author;
//         $this->title=  $title;
//         $this->ISBN =  $ISBN ;
//     }

//     public function dsplay(){
//         echo"the author:$this->title and author:$this->author and ISBN is $this->ISBN";
//     }

//     function set_title($title){
//         $this->title=$title;
//     }

//     function get_author(){
//         return $this->author;
//     }
// }
// $myBook=new book("azer","amine",1234);
// $myBook->set_title("new title");

// echo $myBook->get_author();
// $myBook->get_author();
// $myBook->dsplay();





// class Person{
//     public $name;
//     public $age;
//     public $gender;

//     public function __construct($name,$age,$gender) {
//         $this->name=$name;
//         $this->age=$age;
//         $this->gender=$gender;
//     }

//     public function display(){
//         echo "the name is $this->name ,age is $this->age , gender is $this->gender ";
//     }

//     public function set_name($name){
//         $this->name=$name;
//     }
//      function get_gender(){
//         return $this->gender;
//     }
// }

// $myPerson=new Person("amine",13,"male");
// $myPerson->set_name("yara");
// echo $myPerson->get_gender();
// echo '<br>';
// $myPerson->display();



// Define the Person class with encapsulation
class Person {
    private $name;
    private $age;
    private $gender;

    public function __construct($name, $age, $gender) {
        $this->setName($name);
        $this->setAge($age);
        $this->setGender($gender);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        if ($age > 0) {
            $this->age = $age;
        } else {
            echo "Age must be positive.";
        }
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function introduce() {
        echo "Hello, my name is {$this->getName()}. I am {$this->getAge()} years old and I am {$this->getGender()}.";
    }
}

$person1 = new Person("Amine", 25, "Male");
$person2 = new Person("Sarah", 28, "Female");

// $person1->introduce();
// echo "<br>";
// $person2->introduce(); 



//inheritance
class student extends Person{
    private $grade;

    public function __construct($name, $age, $gender,$grade){

//call the parent contruct

parent::__construct($name, $age, $gender);
$this->setGrade($grade);

}

public function getGrade(){
   return  $this->grade;
}

public function setGrade($grade){
   $this->grade=$grade;
}

//extend it from the parent
public function study(){
    echo "the student is named:{$this->getName()} and studying well";
}

public function introduce(){
    parent::introduce();

    echo "and also i'm {$this->getGrade()} "; 
}
}

$mynewstudent=new student("bol",22,"male","primary");
$mynewstudent->introduce();
echo "<br>";
// $mynewstudent->study();

?>
