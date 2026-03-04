<?php
abstract class Animal {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract function makeSound();

}
class Dog extends Animal {
    function makeSound() {
        return "Woof!";
    }
}
class Cat extends Animal {
    function makeSound() {
        return "Meow!";
    }
}
$dog = new Dog("Houndoom");
$cat = new Cat("Meowth");
echo $dog->name . " says: " . $dog->makeSound() . "\n";
echo $cat->name . " says: " . $cat->makeSound() . "\n";
?>