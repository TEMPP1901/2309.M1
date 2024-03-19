<?php
echo"demo associative array";
$ds=[
    "sv01"=>"son phi long",
    "sv02"=>"le tan phat",
    "sv05"=>"nguyen thanh vu",
    "sv20"=>"tran que nghi",
    "sv10"=>"ngo minh tuan",
    "sv12"=>"nguyen xuan binh"
];
echo"danh sach sinh vien\n";
foreach($ds as $id =>$name){
    echo"$id.$name\n";
}
//sap xep theo ten
echo"\n danh sach sinh vien\n";
asort($ds);
foreach($ds as $id=>$name){
    echo"$id.$name\n";
}
//sap xep theo ma so
echo"\n danh sach sinh vien\n";
ksort($ds);
foreach($ds as $id=>$name){
    echo"$id.$name\n";
}
// sap xep theo thu tu nguoc lai
echo"\n danh sach sinh vien\n";
krsort($ds);
foreach($ds as $id=>$name){
    echo"$id.$name\n";
}