<?php
abstract class Animal
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function makeSound();
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo $this->name . ": Woof!\n";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo $this->name . ": Meow!\n";
    }
}

//Lớp `Animal` là lớp trừu tượng, có phương thức trừu tượng `makeSound`.
//Lớp `Dog` và `Cat` kế thừa từ lớp `Animal`, và định nghĩa lại phương thức `makeSound`.
$spike = new Dog("Spike");
$spike->makeSound();
$misty = new Cat("Misty");
$misty->makeSound();
