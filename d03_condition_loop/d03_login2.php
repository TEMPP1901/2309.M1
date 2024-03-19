//code xu li du lieu nhap tren form d03_login.php
<?php
// kiem tra form login dax thuc hien chua
if(isset($_POST["uid"])==false){
//chua nhap lieu se quay ve lai form login
header("Location:d03_login.php");
exit;
}

$username=$_POST["uid"];
$pass=$_POST["pwd"];
$acounts=[
    "admin"=>"1234",
    "guest"=>"123",
    "long"=>"abc",
    "aptech"=>"fpt"
];

foreach($acounts as $id=>$mk){
    if($id==$acounts&&$mk==$pass){
        echo"<h3> hello, $username<h3/>";
        exit;
    }
}

echo"<h3>hello,$username!<h3/>";

