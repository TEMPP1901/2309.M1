<?php 
echo"demo local variable";
$x=400;
function fnprint(){
    global $x;
    echo"in function fnprint(),x=$x \n";
    $x++;
}
fnprint();
echo"outside dunction fnprint(),x=$x\n";//bao loi

