<?php
interface Flyable
{
    public function fly();
}

class Bird implements Flyable
{
    public function fly()
    {
        echo "I'm flying!\n";
    }
}

class Bat implements Flyable
{
    public function fly()
    {
        echo "I'm flying too!\n";
    }
}

$bird = new Bird();
$bird->fly(); // Output: I'm flying!

$bat = new Bat();
$bat->fly(); // Output: I'm flying too!

//Giao diện `Flyable` có phương thức trừu tượng `fly`.
//Lớp `Bird` và `Bat` triển khai giao diện `Flyable`, và định nghĩa phương thức `fly`.
