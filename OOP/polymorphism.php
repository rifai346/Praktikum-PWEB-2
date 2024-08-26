<?php

class Printer{
    public function print (Animal $animal){
        echo $animal->getName() ."says". $animal->makeSound() . "<br>";
    }
}

$dog = new Dog("Buddy");
$cat = new Cat("kitty");

$printer =new Printer();
$printer->print($dog);
$printer->print($cat);
