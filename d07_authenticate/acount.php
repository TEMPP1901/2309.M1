<?php
//lap tring crud cho bang bt acount
//1.tao doi tuong acount

class account
{
    //ham dung
    public function __construct(public $username = null, public $password = null, public $role = 2)
    {
    }
    public function __toString()
    {
        return "[ username=$this->username,password:$this->password,  role=$this ->role";
    }
}


include_once("../my_connect.php");

class accountDAO
{
    public  static function get($username = null, $password = null)
    {
        $ds = null;
        $cn = fn_connect_oop();
        $sql = "SELECT * FROM `tbacount` WHERE `username`  LIKE '$username'";


        $result = $cn->query($sql);

        if ($result == false) {
            echo "khong the truy van du lieu trong bang tbcoiurse " . $cn->errno;
        } else {
            $ds = []; //tao mang chua cac dong ket qua tim dc
            //duyet tat ca cac dong du lieu tra ve va luu vo mang ds
            while ($row = $result->fetch_assoc()) {
                $object = new account(username: $row["username"], password: $row["password"], role: $row["role"]);
                $ds[] = $object;
            }
        }
        $cn->close();
        return $ds;
    }
}
