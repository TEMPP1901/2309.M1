<?php
//Ngoài ra, bạn có thể sử dụng từ khóa `final` để ngăn chặn lớp con ghi đè phương thức của lớp cha.
class Animal
{
    final public function makeSound()
    {
        echo "I'm an animal!";
    }
}

class Dog extends Animal
{ 
    // Lỗi: Phương thức 'makeSound()' không thể được ghi đè
    public function makeSound()
    {
        echo "Woof!";
    }
}