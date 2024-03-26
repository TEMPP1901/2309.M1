<?php
class Animal
{
    public function makeSound()
    {
        echo "I'm an animal!\n";
    }
}

class Mammal extends Animal
{
    public function giveBirth()
    {
        echo "I'm giving birth!\n";
    }
}

class Dog extends Mammal
{
    public function bark()
    {
        echo "Woof!\n";
    }
}

$dog = new Dog();
$dog->makeSound(); 
$dog->giveBirth(); 
$dog->bark(); 

// Lớp `Dog` kế thừa từ lớp `Mammal`, và lớp `Mammal` kế thừa từ lớp `Animal`.
// Lớp `Dog` có thể sử dụng trực tiếp tất cả các thuộc tính và phương thức của lớp `Animal` và lớp `Mammal`.