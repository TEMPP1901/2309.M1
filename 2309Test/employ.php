<?php

class Employ
{
    //ham dung
    public function __construct(public $EmployId = null, public $EmployName = "new Employ", public $Age =null,public $Pass=null)
    {
    }
    public function __toString()
    {
        return "[ $this->EmployId,$this->EmployName,$this->Age,$this->Pass";
    }
}
include_once("../my_connect.php");
$ds = null;
class EmployDAO
{

    public static function get($EmployId = null, $EmployName = null)
    {
        $ds = null;
        $cn = fn_connect_oop();
        //lay toan bo danh sach ca lop hoc
        //1.tao connection den csdl db2309.m1
        //2.goi ham lay toan bo du lieu trong bang tbcourse
        $sql = "SELECT * FROM `employee`";
        if ($EmployId == null) {
            if ($EmployName != null) {
                $sql = "SELECT * FROM `employee` WHERE `EmployName` LIKE '%$EmployName%'";
            }
        } else {
            $sql = "SELECT * FROM `employee` WHERE `EmployId`='$EmployId'";
        }
        $result = $cn->query($sql);

        //echo($sql);

        if ($result == false) {
            //echo "khong the truy van du lieu trong bang tbcoiurse " . $cn->errno;
        } else {
            $ds = []; //tao mang chua cac dong ket qua tim dc
            //duyet tat ca cac dong du lieu tra ve va luu vo mang ds
            while ($row = $result->fetch_assoc()) {
                $object = new Employ(EmployId: $row["EmployId"], EmployName: $row["EmployName"], Age: $row["Age"],Pass:$row["Pass"]);
                $ds[] = $object;
            }
        }

        //var_dump($ds);
        $cn->close();
        return $ds;
    }


    public static function update(Employ $new)
    {
        $cn = fn_connect_oop();
        //1.them 1 khoa hoc moi vo bang
        $sql = "UPDATE `employee` SET `Age` = '$new->Age', `EmployName`='$new->EmployName' WHERE `EmployId`='$new->EmployId'";

        // echo $sql;

        $result = $cn->query($sql);
        if ($result == false) {
          //  echo "khong the truy van du lieu trong bang  " . $cn->errno;
        }
        $cn->close();
        return $result;
    }
    
}
   
// test thu chuc nang select
// $list = courseDAO::get();
