<?php 
echo"demo local variable";
function fnprint(){
   static $x=1;
   $y=1;
   echo"static x:$x\n";
   echo"local y:$y\n";
    $x++;$y++;
}
echo"call function fnprint() lan 1:".fnprint();
echo"call function fnprint() lan 2:".fnprint();
echo"call function fnprint() lan 3:".fnprint();
echo"call function fnprint() lan 4:".fnprint();

