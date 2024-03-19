<?php 
include_once "triat.php";
// dinh nghia class [city] mo ta thanh pho
class city{
    //khai bao cac property members
    public $id,$name,$country;
    public $zipcode;
    //dinh nghia cac method members
    public function output(){
        return "id=$this->id,ten=$this->name,quoc gia=$this->country,zipcode=$this->zipcode";
    }
    public function getName(){
        return $this->name->upper();
    }
    use T;
}
//test
$c1=new city;
echo $c1->output();
echo"\n\n";
$c2 = new city;
$c2->id="SG";
$c2->name="SAI GON";
$c2->country="Viet Nam";
$c2->zipcode="7000";
echo $c2->output()."\n\n";
$c2->greeting();


include_once "country.php";
echo"\n c2 instanceof city? ";
var_dump($c2 instanceof city);
echo "\n c2 instanceof city? ";
var_dump($c2 instanceof country);
