<?php
//demo tinh ke thua xay dung lop cha
class Person
{
    public function __construct(public $id = "p1", public $name = "no", protected $gender = true)
    {
    }
    private function output()
    {
        $gt = $this->gender;
        return "[id:$this->id,name:$this->name,gender:$gt]";
    }
    protected function display()
    {
        return $this->output();
    }
    public function print()
    {
        echo "[id:$this->id, name:$this->name]\n";
    }
}
// xay dung lop con student
class student extends Person
{
    public function __construct(public $id = "SV01", public $name = "phi long", public $gender = true, public $mark = 0)
    {
        parent::__construct($id, $name, $gender);
    }
    public function print()
    {
        echo "[id:$this->id, name:$this->name, final mark:$this->mark]";
    }
}

// doan test

$p1 = new Person(id: "p01", gender: true, name: "long");
$p1->print();

$sv2 = new student(id: "sv2", gender: false, name: "trinh", mark: 80);
$sv2->print();
