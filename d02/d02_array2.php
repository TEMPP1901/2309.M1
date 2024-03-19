<?php

echo"mang 2 chieu\n";
$a=[
    ['sv01','phi long',89],
    ['sv02','tan phat',98],
    ['sv03','anh huy',59],
    ['sx04','xuan binh',70]
];
echo"bang diem sinh vien";
foreach($a as $index=>$value){
    echo"\n $index.";
    foreach($value as $item){
        echo"\n$item";
    }
};