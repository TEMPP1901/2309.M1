<?php
//Ngoài ra, bạn có thể sử dụng từ khóa `final`
//để ngăn chặn lớp con kế thừa từ một lớp hoặc ghi đè phương thức của lớp cha.
final class Animal
{
    public function makeSound()
    {
        echo "I'm an animal!\n";
    }
}

class Dog extends Animal
{
    // Lỗi: Lớp con không thể kế thừa từ lớp 'Animal'

    public function makeSound()
    {
        // Lỗi: Phương thức 'makeSound()' không thể được ghi đè
        echo "Woof!\n";
    }
}
