<?php

echo"demo data type";
echo"kieu so nguyen int";
$a=10234;
echo"a=$a,max-int=".PHP_INT_MAX."\n";


echo"kieu so thuc";
$f=10234.6789;
echo"b=$b,max-float=".PHP_FLOAT_MAX."\n";


$x1=12;$x2=true;$x3=false;$x4=123.678;$x5="123.789usd";
echo"\n x1=$x1,x2=$x2,x3=$x3,x4=$x4,x5=$x5\n";
echo"sau khi su dung ham float_val";
echo"\n x1=".floatval($x1);
echo"\n x2=".floatval($x2);
echo"\n x3=".floatval($x3);
echo"\n x4=".floatval($x4);
echo"\n x5=".floatval($x5);


echo"\n\n\nkieu luan ly (boolean:true false)\n";
$b1=true;
$b2=false;
echo"b1=$b1,b2=$b2\n";

echo"\n\n\nkieu null \n";
$c=null;
echo"c=$c\n";