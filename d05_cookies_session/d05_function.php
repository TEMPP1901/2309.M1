<?php
echo"user defined function demo";
function fn_random(){
    $a=[];
    $e=[];
    $cnt=0;
    for($i=0;$i<10;$i++){
        $a[$i]=rand(0,100);
        if($a[$i] %2 ==0){
            $e[$cnt]= $a[$i];         
            $cnt++;
        }
    }
    print_r($a);
    if($cnt!=0){
        echo"cac so chan\n";
print_r($e);
    }
}
fn_random();
