<?php  
$a=10;
$b=0;
echo"a=$a,b=$b\n";
echo"a-b=".$a-$b."\n";
echo "a+b=" . $a+$b."\n";
echo "a*b=" . $a*$b."\n";
echo"=================\n";
echo"finish";
echo"see u soon";
try{
    echo"a/b=".$a/$b."/n";
}
catch(Throwable $th){
    echo"\n>>co loi sai:".$th->getMessage()."\n";
}
echo "=================\n";
echo "finish";
