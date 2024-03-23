<?php 
//demo tinh truu tuong
abstract class Shape{
    public abstract function area():float;
     public abstract function peripheral():float;
     public function print(){
        echo "dien tich:".$this->area()."\t";
        echo "chu vi:".$this->peripheral()."\n";
     }
}
class Circle extends Shape{

    public function __construct(public $r=1){}
    public function area():float{
        $pi=3.14;
        return $pi*$this->r*$this->r;
    }
    public function peripheral(): float
    {
        $pi = 3.14;
        return $pi * $this->r *2;
    }
}
class Rectangle extends Shape
{

    public function __construct(public $w = 10,public $h=5)
    {
    }
    public function area(): float
    {
        return $this->w*$this->h;
    }
    public function peripheral(): float
    {
        return 2*($this->w+$this->h);
    }
}
$hcn= new Rectangle(w:20,h:12);
$ht= new Circle(r:2.5);
echo">>hinh chu nhat:\n";
$hcn->print();
echo ">>hinh tron:\n";
$ht->print();