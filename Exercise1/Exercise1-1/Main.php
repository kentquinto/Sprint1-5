<?php
require_once "Dog.php";
require_once "Cat.php";
$dog = new Dog("Houndoom");
$cat = new Cat("Meowth");
echo $dog->name . " says: " . $dog->makeSound() . "\n";
echo $cat->name . " says: " . $cat->makeSound() . "\n";
?>