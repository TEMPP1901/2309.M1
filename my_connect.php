<?php
//ham ket noi co so du lieu va php(theo thu tuc)
function fn_connect(){
    $host="localhost:3306";
    $username="root";
    $db= "employdb";
    $cn=mysqli_connect(hostname:$host,username:$username,database:$db);
    if($cn==false){
        die("error connecting to datatbase <br/>".mysqli_connect_error());//loi sai ko the ket noi den co so du lieu
    }

    return $cn;
}


//ham ket noi co so du lieu va php(lap trinh theo huong doi tuong)
function fn_connect_oop(){
    $host="localhost:3306";
    $username="root";
    $db = "employdb";
    $cn=new mysqli(hostname:$host,username:$username,database:$db);
    if($cn->connect_errno){
        die("error connecting to datatbase <br/>".$cn->connect_error);//loi sai ko the ket noi den co so du lieu
    }
    
    return $cn;
}

