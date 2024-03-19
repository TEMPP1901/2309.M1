<?php
echo"demo pass by reference\n";
function fn_value($a,$b){
    $tem=$a;
    $a=$b;
    $b=$a;
    echo"trong ham fn value bien a =$a,b=$b\n";
}
function fn_refe(&$a,&$b){
    $tem=$a;
    $a=$b;
    $b=$a;
echo" trong ham fn refe bien a =$a,b=$b\n";
} 
$a=100;$b=76;
echo" truoc khi goi ham fn value bien a=$a,b=$b\n";
fn_value($a,$b);
echo" sau khi goi ham fn value bien a=$a,b=$b\n\n\n";

echo" truoc khi goi ham fn refe bien a=$a,b=$b\n";
fn_refe($a,$b);
echo" sau khi goi ham fn refe bien a=$a,b=$b\n";