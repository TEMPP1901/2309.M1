<?php 
//dinh nghia class [country] mo ta mot quoc gia
class country{

    public $id, $name;
    public $area;
    //dainh nghia ham dung (contructor) de khoi tao gia tri ban dau cho cac thuoc tinh 
    public function __construct($code="VN", $name="VietNam",$dientich=331690) {
        $this->id = $code;
        $this->name = $name;
        $this->area = $dientich;
    }
    //dinh nghia method member
    function output():string{
        return" id=$this->id,ten=$this->name,dientich=$this->area km2";
    }
    //override ham tostring()de tra ve chuoi mo ta noi dung doi tuong
    public function _toString(){
        return"id=$this->id,ten=$this->name,dientich=$this->area km2";

    }
}

//test code
$q1=new country();
echo $q1->output();
echo "\n";
$q2=new country(code:"TL",name:"thai lan",dientich:513115);
echo $q2->output();
echo "\n";
$q3=new country(code:"RF",name:"Lien Bang  Nga",dientich:17098246);
echo $q3->output();
