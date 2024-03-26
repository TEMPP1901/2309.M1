<?php


interface Animal
{
    public function makeSound();
}

interface Flyable extends Animal
{
    public function fly();
}

class Bird implements Flyable
{
    public function makeSound()
    {
        echo "Chirp!\n";
    }

    public function fly()
    {
        echo "I'm flying!\n";
    }
}

$bird = new Bird();
$bird->makeSound(); 
$bird->fly();

//Giao diện `Flyable` kế thừa từ giao diện `Animal`.
//Lớp `Bird` triển khai giao diện `Flyable` và phải định nghĩa cả hai phương thức `makeSound` và `fly`.