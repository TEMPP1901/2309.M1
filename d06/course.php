<?php
//lap trinh CRUD cho bang tbcourse
//1 tao doi tuong course(tbcourse)
class course
{
    //ham dung
    public function __construct(public $id = null, public $name = "new course", public $fee = 1000)
    {
    }
    public function __toString()
    {
        return "[ id=$this->id,ten khao hoc:$this->name,hoc phi:$this->fee";
    }
}
include_once("../my_connect.php");
$ds = null;
class courseDAO
{

    public static function get($id = null, $name = null)
    {
        $ds = null;
        $cn = fn_connect_oop(); 
        //lay toan bo danh sach ca lop hoc
        //1.tao connection den csdl db2309.m1
        //2.goi ham lay toan bo du lieu trong bang tbcourse
        $sql = "SELECT * FROM `tbcourse`";
        if ($id == null) {
            if ($name != null) {
                $sql = "SELECT * FROM `tbcourse` WHERE `name` LIKE '%$name%'";
            }
        } else {
            $sql = "SELECT * FROM `tbcourse` WHERE `id`='$id'";
        }
        $result = $cn->query($sql);

        //echo($sql);

        if ($result == false) {
            echo "khong the truy van du lieu trong bang tbcoiurse " . $cn->errno;
        } else {
            $ds = []; //tao mang chua cac dong ket qua tim dc
            //duyet tat ca cac dong du lieu tra ve va luu vo mang ds
            while ($row = $result->fetch_assoc()) {
                $object = new course(id: $row["id"], name: $row["name"], fee: $row["fee"]);
                $ds[] = $object;
            }
        }

        //var_dump($ds);
        $cn->close();
        return $ds;
    }

    public static function insert(course $new)
    {

        print_r($new);
        $cn = fn_connect_oop();
        //1.them 1 khoa hoc moi vo bang
        $sql = "INSERT INTO `tbcourse` (`id`, `name`, `fee`) VALUES (NULL, '$new->name', '$new->fee')";

        print_r($sql);
        $result = $cn->query($sql);
        if ($result == false) {
            echo "khong the truy van du lieu trong bang tbcourse " . $cn->errno;
        }
        $cn->close();
        return $result;
    }
    public static function update(course $new)
    {
        $cn = fn_connect_oop();
        //1.them 1 khoa hoc moi vo bang
        $sql = "UPDATE `tbcourse` SET `fee` = '$new->fee', `name`='$new->name' WHERE `id`='$new->id'";      

        // echo $sql;

        $result = $cn->query($sql);
        if ($result == false) {
            echo "khong the truy van du lieu trong bang tbcourse " . $cn->errno;
        }
        $cn->close();
        return $result;
    }
    //ham xoa mot khoa hoc trong bang
    public static function remove($id)
    {
        $cn = fn_connect_oop();
        //xoa mot khoa hoc trong bang tbcourse
        $sql = "DELETE FROM `tbcourse` WHERE `id` = $id";
        $result = $cn->query($sql);
        if ($result == false) {
            echo "khong the truy van du lieu trong bang tbcoiurse " . $cn->errno;
        }

        $cn->close();
        return $result;
    }
}
   
// test thu chuc nang select
// $list = courseDAO::get();
