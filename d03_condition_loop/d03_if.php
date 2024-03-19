<?php
date_default_timezone_set("Asia/Ho_CHI_MINH");
echo"demo cac cau lenh dieu kien\n";
//lay gia tri ngay gio hien tai cua may chu web server
$today=date("l j-M-Y \n");
echo"$today";
$today=date("F-d-Y\n");
echo "$today";
$today=date("l,d-m-Y \n");
echo"$today";
$today=date("l,Y-m-d  H:i:s\n");
echo"$today";
//lay gio hien tai cua may chu
$hour=date("H");
echo"bay gio la:$hour\n";


if($hour<11){echo"chao buoi sang\n";}
else if($hour<16){echo"chao buoi chieu\n";}
else if($hour<21){echo"chao buoi chieu\n";}