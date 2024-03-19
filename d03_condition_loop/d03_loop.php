<?php
echo"demo loop for\n";
//in ra bang cuu chuong
$n=7;
echo">> bang cuu chuong\n";
for($i=1;$i<10;$i++)
{
    echo"$i*$n=".($i*$n)."\n";
}

//demo vong lap while
echo"demo vong lap while\n";
//in can bac hai cua so ngau nhien be hon 100
echo">>can bac hai so nho hon hay bang 100\n";
while(true){
    $n=rand(0,120);
    if($n>100){
        break;
    }
    echo"can bac hai cua [$n]:".sqrt($n)."\n";
}