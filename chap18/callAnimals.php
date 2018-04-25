<?php
require_once("AbstractAnimal.php");
require_once("Dog.php");

$pet = new Dog();
$pet->setName("ぽち");
print($pet->getName()."の鳴き声は".$pet->call());

// require_once("Cat.php");
// $pet2 = new Cat();
// $animal = new AbstractAnimal();