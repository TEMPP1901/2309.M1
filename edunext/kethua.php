<?php
class Animal {
public $name;
public function makeSound() {
echo "I'm an animal!\n";
}
}
class Dog extends Animal
{
    public function bark()
    {
        echo "Woof!\n";
    }
}
$dog = new Dog();
$dog->name = "Fido";
$dog->makeSound();
$dog->bark();

//Lớp `Animal` có thuộc tính `name` và phương thức `makeSound`.
//Lớp `Dog` kế thừa từ lớp `Animal`, và có thể sử dụng trực tiếp thuộc tính `name` và phương thức `makeSound`.
//Lớp `Dog` cũng có phương thức `bark` riêng.









