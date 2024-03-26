<?php
abstract class Animal
{
    abstract public function makeSound();
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Woof!";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo "Meow!";
    }
}

 //Lớp `Animal` là lớp trừu tượng, có phương thức trừu tượng `makeSound`.
 //Lớp `Dog` và `Cat` kế thừa từ lớp `Animal`, và định nghĩa lại phương thức `makeSound`.