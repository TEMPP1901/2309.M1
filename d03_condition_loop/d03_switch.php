<?php
echo"demo switch-case\n";
//tinh tien bonus cho nhan vien dua vao bac luong
//a=>1000;b=>800;c=>4=>400;d=>100;other=>0
$level="B";
//tao ra mot function 
function getBonus($level):int{
switch($level){
    case'a':
    case'A':
        $bonus=1000;
        break;
    case'b':
    case'B':
        $bonus=800;
        break;
    case'c':
    case'C':
        $bonus=400;
        break;
    case'd':
    case'D':
        $bonus=100;
        break;
    default:
        $bonus=0;
        break;
    }
    return $bonus;
}
$level="a";
echo "bac luong $level=>tien thuong:".getbonus($level)."\n";
$level="B";
echo "bac luong $level=>tien thuong:".getbonus($level)."\n";
$level="c";
echo "bac luong $level=>tien thuong:".getbonus($level)."\n";
$level="F";
echo "bac luong $level=>tien thuong:".getbonus($level)."\n";