<?php
class Animal
{
    public function makeSound()
    {
        echo "I'm an animal!\n";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Woof!\n";
    }
}

$dog = new Dog();
$dog->makeSound(); // Output: Woof!
// Lớp `Dog` kế thừa phương thức `makeSound` từ lớp `Animal`.
// Lớp `Dog` ghi đè phương thức `makeSound` để trả về âm thanh "Woof!".
