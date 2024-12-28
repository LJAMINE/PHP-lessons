<?php 

// Parent class
class Animal {
    public function makeSound() {
        echo "This animal makes a sound.<br>";
    }
}

// Child class: Dog
class Dog extends Animal {
    public function makeSound() {
        echo "The dog barks.<br>";
    }
}

// Child class: Cat
class Cat extends Animal {
    public function makeSound() {
        echo "The cat meows.<br>";
    }
}

// Create objects
// $animal = new Animal();
// $dog = new Dog();
// $cat = new Cat();

// Call the makeSound() method
$animal->makeSound();  // Outputs: This animal makes a sound.
$dog->makeSound();     // Outputs: The dog barks.
$cat->makeSound();     // Outputs: The cat meows.

?>