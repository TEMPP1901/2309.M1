<?php 
class Animal {
  public function makeSound($type = "normal") {
    echo "I'm making a $type sound!\n";
  }
}
$dog = new Animal();
$dog->makeSound(); // Output: I'm making a normal sound!
$dog->makeSound("loud"); // Output: I'm making a loud sound!

//Lớp `Animal` có hai phương thức `makeSound`.
//Phương thức `makeSound` đầu tiên không có tham số, và trả về âm thanh bình thường.
//Phương thức `makeSound` thứ hai có một tham số `$type`, và trả về âm thanh với độ lớn được chỉ định.