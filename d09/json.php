<?php
echo"demo json\n";
//khai bao chuoi s chua noi dung 1 sv bieu dien theo cau truc json
$s='{"id":"sv01","name":"phi long","gender":true,"yob":2004}'; 
//bien chuoi thanh doi tuong json sv
$sv=json_decode($s);
// in ra cac thuoc tinh dt $sv
foreach($sv as $key =>$value){
    echo"\t $key=>$value\n";
}